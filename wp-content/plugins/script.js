document.addEventListener('DOMContentLoaded', function () {
    const forms = ['form_frontend_signup', 'form_signup', 'form_signup_ar'];

    forms.forEach(id => {
        const form = document.getElementById(id);
        if (!form) return;

        const resultBox = form.querySelector('#result') || form.querySelector('#result_ar') || document.getElementById('result');

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const data = new FormData(form);
            data.append('action', 'cfp_submit_form');
            data.append('cfp_nonce', cfp_ajax_data.nonce);

            fetch(cfp_ajax_data.ajax_url, {
                method: 'POST',
                body: data
            })
            .then(res => res.json())
            .then(response => {
                if (response.success) {
                    if (resultBox) {
                        const successMsg = id === 'form_signup_ar' ? 'تم إرسال النموذج بنجاح!' : response.data.message;
                        resultBox.innerHTML = `<p style="color: green;">${successMsg}</p>`;
                    }
                    form.reset();
                } else {
                    if (resultBox) {
                        const errorMsg = id === 'form_signup_ar' ? 'هذا البريد الإلكتروني موجود بالفعل أو حدث خطأ ما.' : response.data.message;
                        resultBox.innerHTML = `<p style="color: red;">${errorMsg}</p>`;
                    }
                }
            })
            .catch(error => {
                if (resultBox) {
                    const errorMsg = id === 'form_signup_ar' ? 'حدث خطأ في الإرسال.' : 'AJAX error occurred.';
                    resultBox.innerHTML = `<p style="color: red;">${errorMsg}</p>`;
                }
                console.error('AJAX Error:', error);
            });
        });
    });
});