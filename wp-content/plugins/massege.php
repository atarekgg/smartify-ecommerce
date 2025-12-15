<?php
/*
Plugin Name: Message from the user
Description: Description Plugin test
Author: Ahmed tarek
Version: 1.0
*/

add_action('admin_menu', function () {
  add_menu_page('Messages', 'Messages', 'manage_options', 'cfp-admin', 'cfp_admin_page', 'dashicons-email', 2);
});

function cfp_admin_page()
{
  global $wpdb;
  $table = $wpdb->prefix . 'cfp_messages';
  $results = $wpdb->get_results("SELECT * FROM $table");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<style>
      .user-table-container {
        width: 50%;
        margin: 20px auto;
        display: none;
      }

      table {
        width: 100%;
      }

      table,
      th,
      td {
        border: 1px solid black;
        border-collapse: collapse;
      }

      th,
      td {
        padding: 10px;
      }

      th {
        background-color: #FFB500;
        font-size: 20px;
      }

      td {
        background-color: #FDDF95;
      }

      .center {
        margin-left: auto;
        margin-right: auto;
        width: 100%;
      }

      .toggle-table-btn {
        padding: 10px 20px;
        border-radius: 20px;
        border: none;
        background: #FFB500;
        color: white;
        cursor: pointer;
        margin: 20px auto;
        display: block;
      }

      .bottom-buttons {
        display: flex;
        gap: 10px;
        justify-content: center;
        margin-top: 20px;
      }
</style>
</head>
<body>
  <button class="toggle-table-btn" onclick="toggleTable()">Show Messages</button>

  <div id="users-tab" class="user-table-container" style="width: 100%;">
    <h2 style="color: #b9b9b9;">Registered Messages</h2>
    <table class="user-table center" border="1px">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Message</th>
          <th>Registration Date</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($results)) : ?>
          <?php foreach ($results as $user) : ?>
            <tr>
              <td><?php echo esc_html($user->id); ?></td>
              <td><?php echo esc_html($user->name); ?></td>
              <td><?php echo esc_html($user->email); ?></td>
              <td><?php echo esc_html($user->message); ?></td>
              <td><?php echo esc_html($user->registration_date); ?></td>
            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <tr>
            <td colspan="5" style="text-align: center;">No users found in the database.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
  <script>
    function toggleTable() {
      const table = document.querySelector('.user-table-container');
      table.style.display = table.style.display === 'none' ? 'block' : 'none';
    }
  </script>
</body>
</html>

<?php
}

// English Form Shortcode
add_shortcode('form2002', function () {
  ob_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Contact Form - White & Black</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }
    body {
      min-height: 100vh;
      width: 100%;
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      filter: grayscale(100%);
    }
    .container {
      width: 85%;
      background: #fff;
      border-radius: 6px;
      padding: 20px 60px 30px 40px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
    .container .content {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .container .content .left-side {
      width: 25%;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin-top: 15px;
      position: relative;
    }
    .content .left-side::before {
      content: '';
      position: absolute;
      height: 70%;
      width: 2px;
      right: -15px;
      top: 50%;
      transform: translateY(-50%);
      background: #aaa;
    }
    .content .left-side .details {
      margin: 14px;
      text-align: center;
    }
    .content .left-side .details i {
      font-size: 30px;
      color: #000;
      margin-bottom: 10px;
    }
    .content .left-side .details .topic {
      font-size: 18px;
      font-weight: 500;
      color: #000;
    }
    .content .left-side .details .text-one,
    .content .left-side .details .text-two {
      font-size: 14px;
      color: #444;
    }
    .container .content .right-side {
      width: 75%;
      margin-left: 75px;
    }
    .content .right-side .topic-text {
      font-size: 23px;
      font-weight: 600;
      color: #000;
    }
    .right-side p {
      color: #444;
    }
    .right-side .input-box {
      height: 50px;
      width: 100%;
      margin: 12px 0;
    }
    .right-side .input-box input,
    .right-side .input-box textarea {
      height: 100%;
      width: 100%;
      border: 1px solid #aaa;
      outline: none;
      font-size: 16px;
      background: #fff;
      color: #000;
      border-radius: 6px;
      padding: 0 15px;
      resize: none;
    }
    .right-side .message-box {
      min-height: 110px;
    }
    .right-side .input-box textarea {
      padding-top: 6px;
    }
    .right-side .button {
      display: inline-block;
      margin-top: 12px;
    }
    .right-side .button input[type="button"] {
      color: #fff;
      font-size: 18px;
      outline: none;
      border: none;
      padding: 8px 16px;
      border-radius: 6px;
      background: #000;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .button input[type="button"]:hover {
      background: #333;
    }

    @media (max-width: 950px) {
      .container {
        width: 90%;
        padding: 30px 40px 40px 35px;
      }
      .container .content .right-side {
        width: 75%;
        margin-left: 55px;
      }
    }

    @media (max-width: 820px) {
      .container {
        margin: 40px 0;
        height: 100%;
      }
      .container .content {
        flex-direction: column-reverse;
      }
      .container .content .left-side {
        width: 100%;
        flex-direction: row;
        margin-top: 40px;
        justify-content: center;
        flex-wrap: wrap;
      }
      .container .content .left-side::before {
        display: none;
      }
      .container .content .right-side {
        width: 100%;
        margin-left: 0;
      }
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          
        <!-- <i class="fas fa-map-marker-alt"></i>
         -->
          <div class="topic">Address</div>
          <div class="text-one">Surkhet, NP12</div>
          <div class="text-two">Birendranagar 06</div>
        </div>
        <div class="phone details">

                  <!-- <i class="fas fa-phone-alt"></i>
                   -->
          <div class="topic">Phone</div>
          <div class="text-one">+20 123 456 7890</div>
          <div class="text-two">+20 123 456 7880</div>
        </div>
        <div class="email details">
<!--           
          <i class="fas fa-envelope"></i>
           -->
          <div class="topic">Email</div>
          <div class="text-one">support@smartify.com</div>
          <div class="text-two">smartify@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of queries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
        <form id="form_signup" method="post">
          <input type="hidden" name="id" value="12345">
          <div class="input-box">
            <input type="text" name="name" placeholder="Enter your name">
          </div>
          <div class="input-box">
            <input type="text" name="email" placeholder="Enter your email">
          </div>
          <div class="input-box message-box">
            <textarea name="message" placeholder="Your Message"></textarea>
          </div>
          <div class="button">
            <input type="submit" name="submit" value="Send Now">
          </div>
          <div id="result"></div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<?php
  return ob_get_clean();
});

// Arabic Form Shortcode
add_shortcode('form2002_ar', function () {
  ob_start();
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>نموذج الاتصال - أبيض وأسود</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;600;700&display=swap');
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Tajawal", sans-serif;
    }
    body {
      min-height: 100vh;
      width: 100%;
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      filter: grayscale(100%);
    }
    .container {
      width: 85%;
      background: #fff;
      border-radius: 6px;
      padding: 20px 60px 30px 40px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
    .container .content {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .container .content .left-side {
      width: 25%;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin-top: 15px;
      position: relative;
    }
    .content .left-side::before {
      content: '';
      position: absolute;
      height: 70%;
      width: 2px;
      left: -15px;
      right: auto;
      top: 50%;
      transform: translateY(-50%);
      background: #aaa;
    }
    .content .left-side .details {
      margin: 14px;
      text-align: center;
    }
    .content .left-side .details i {
      font-size: 30px;
      color: #000;
      margin-bottom: 10px;
    }
    .content .left-side .details .topic {
      font-size: 18px;
      font-weight: 500;
      color: #000;
    }
    .content .left-side .details .text-one,
    .content .left-side .details .text-two {
      font-size: 14px;
      color: #444;
    }
    .container .content .right-side {
      width: 75%;
      margin-right: 75px;
      margin-left: 0;
    }
    .content .right-side .topic-text {
      font-size: 23px;
      font-weight: 600;
      color: #000;
    }
    .right-side p {
      color: #444;
    }
    .right-side .input-box {
      height: 50px;
      width: 100%;
      margin: 12px 0;
    }
    .right-side .input-box input,
    .right-side .input-box textarea {
      height: 100%;
      width: 100%;
      border: 1px solid #aaa;
      outline: none;
      font-size: 16px;
      background: #fff;
      color: #000;
      border-radius: 6px;
      padding: 0 15px;
      resize: none;
    }
    .right-side .message-box {
      min-height: 110px;
    }
    .right-side .input-box textarea {
      padding-top: 6px;
    }
    .right-side .button {
      display: inline-block;
      margin-top: 12px;
    }
    .right-side .button input[type="button"] {
      color: #fff;
      font-size: 18px;
      outline: none;
      border: none;
      padding: 8px 16px;
      border-radius: 6px;
      background: #000;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .button input[type="button"]:hover {
      background: #333;
    }

    @media (max-width: 950px) {
      .container {
        width: 90%;
        padding: 30px 40px 40px 35px;
      }
      .container .content .right-side {
        width: 75%;
        margin-right: 55px;
        margin-left: 0;
      }
    }

    @media (max-width: 820px) {
      .container {
        margin: 40px 0;
        height: 100%;
      }
      .container .content {
        flex-direction: column-reverse;
      }
      .container .content .left-side {
        width: 100%;
        flex-direction: row;
        margin-top: 40px;
        justify-content: center;
        flex-wrap: wrap;
      }
      .container .content .left-side::before {
        display: none;
      }
      .container .content .right-side {
        width: 100%;
        margin-right: 0;
      }
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">

          <!-- <i class="fas fa-map-marker-alt"></i> -->
          <div class="topic">العنوان</div>
          <div class="text-one">السعودية، الرياض</div>
          <div class="text-two">حي الملك فهد</div>
        </div>
        <div class="phone details">
<!-- 
          <i class="fas fa-phone-alt"></i> -->
          <div class="topic">الهاتف</div>
          <div class="text-one">+20 123 456 7890</div>
          <div class="text-two">+20 123 456 7890</div>
        </div>
        <div class="email details">
<!--           
          <i class="fas fa-envelope"></i> -->
          <div class="topic">البريد الإلكتروني</div>
          <div class="text-one">support@smartify.com</div>
          <div class="text-two">smartify@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">أرسل لنا رسالة</div>
        <p>إذا كان لديك أي عمل لي أو أي استفسارات متعلقة ببرنامجي التعليمي، يمكنك إرسال رسالة لي من هنا. يسعدني مساعدتك.</p>
        <form id="form_signup_ar" method="post">
          <input type="hidden" name="id" value="12345">
          <div class="input-box">
            <input type="text" name="name" placeholder="أدخل اسمك">
          </div>
          <div class="input-box">
            <input type="text" name="email" placeholder="أدخل بريدك الإلكتروني">
          </div>
          <div class="input-box message-box">
            <textarea name="message" placeholder="رسالتك"></textarea>
          </div>
          <div class="button">
            <input type="submit" name="submit" value="إرسال الآن">
          </div>
          <div id="result_ar"></div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<?php
  return ob_get_clean();
});

// Auto Language Form Shortcode
add_shortcode('form_auto_lang', function() {
    if (function_exists('pll_current_language') && pll_current_language() == 'ar') {
        return do_shortcode('[form2002_ar]');
    } elseif (get_locale() == 'ar') {
        return do_shortcode('[form2002_ar]');
    } else {
        return do_shortcode('[form2002]');
    }
});

register_activation_hook(__FILE__, 'cfp_create_table');
function cfp_create_table()
{
  global $wpdb;
  $table = $wpdb->prefix . 'cfp_messages';
  $charset = $wpdb->get_charset_collate();

  $sql = "CREATE TABLE $table (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(100) NOT NULL,
        email varchar(255) NOT NULL,
        message text NOT NULL,
        registration_date datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    ) $charset;";

  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
  dbDelta($sql);
}

function cfp_enqueue_scripts($hook)
{
  wp_enqueue_script('cfp_script', plugins_url('script.js', __FILE__), ['jquery'], null, true);
  wp_localize_script('cfp_script', 'cfp_ajax_data', ['ajax_url' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce('cfp_ajax_nonce')]);
}
add_action('admin_enqueue_scripts', 'cfp_enqueue_scripts');
add_action('wp_enqueue_scripts', 'cfp_enqueue_scripts');
add_action('wp_ajax_cfp_submit_form', 'cfp_insert_user');
add_action('wp_ajax_nopriv_cfp_submit_form', 'cfp_insert_user');

function cfp_insert_user()
{
  check_ajax_referer('cfp_ajax_nonce', 'cfp_nonce');
  global $wpdb;
  $table_name = $wpdb->prefix . 'cfp_messages';

  $data = array(
    'name' => sanitize_text_field($_POST['name']),
    'email' => sanitize_email($_POST['email']),
    'message' => sanitize_textarea_field($_POST['message']),
    'registration_date' => current_time('mysql')
  );

  $inserted = $wpdb->insert($table_name, $data);

  if ($inserted) {
    wp_send_json_success(['message' => 'Form submitted successfully!']);
  } else {
    wp_send_json_error(['message' => 'This email already exists or something went wrong.']);
  }
}
?>