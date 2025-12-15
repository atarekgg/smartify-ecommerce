# Smartify – Electronics E-Commerce Website

Smartify is a WordPress-based e-commerce website designed for selling electronic devices such as laptops, smartphones, and smart watches. This project was developed as a graduation project. The website supports multiple languages (English and Arabic) using the Polylang plugin

---

## Features

### Admin
- Add, edit, and delete products
- Add, edit, and delete product categories
- Manage orders: view, update, and delete
- Manage users: view user info, delete or edit accounts
- Customize website content (pages, menus, etc.)
- View sales reports and analytics

### Users
- Browse products by category or search
- Add products to shopping cart
- Place and track orders
- Register and manage personal account
- Edit profile and password
- View order history

---

## Technologies Used
- WordPress
- PHP
- MySQL
- HTML, CSS, JavaScript
- WooCommerce

---

## How to Run the Project (Step by Step)

Follow these steps carefully to run the Smartify project locally:

### Step 1: Install XAMPP
1. Download XAMPP from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)
2. Install XAMPP on your computer
3. Open the XAMPP Control Panel and start **Apache** and **MySQL**

### Step 2: Copy Project Files
1. Locate the downloaded project folder (from GitHub)
2. Copy the entire folder
3. Paste it inside XAMPP's `htdocs` directory  
   Example path on Windows:
C:\xampp\htdocs\final project_3

### Step 3: Open phpMyAdmin
1. Open your browser and go to:
http://localhost/phpmyadmin
2. You should see the phpMyAdmin dashboard

### Step 4: Create a New Database
1. Click **New** in phpMyAdmin
2. Enter the database name: final project_3
3. Keep the collation as **utf8_bin**
4. Click **Create**

### Step 5: Import the Database
1. Click on the newly created database (`final project_3`)
2. Click the **Import** tab
3. Click **Choose File** and select:
database/smartify.sql
4. Scroll down and click **Go**
5. Wait until you see a success message
### Step 6: Configure `wp-config.php`
1. Go to the project folder inside `htdocs`:
C:\xampp\htdocs\final project_3
2. Open the file `wp-config.php` in a text editor (e.g., Notepad)
3. Find and change the following lines:

## Step 6: Configure `wp-config.php`

Open the file `wp-config.php` in a text editor and update the following lines:

```php
define('DB_NAME', 'final project_3');   // Database name
define('DB_USER', 'root');              // Database username (default in XAMPP)
define('DB_PASSWORD', '');              // Database password (default empty) ```
Save the file.

Step 7: Run the Website
Open your browser and go to: http://localhost/final project_3 You should now see the Smartify website fully working in Arabic.

Notes
The website content is originally in English.

A plugin (Polylang) is used to display the site in Arabic if needed.

Anyone who downloads the project must configure wp-config.php locally as described above.

Ensure that the project folder is inside htdocs so XAMPP can detect it.

🖼️ Screenshots / Demo
Since the project supports English and Arabic (via Polylang plugin) and is fully functional, here is a demo video showcasing the website in action:

🎥 Watch Demo Video
https://youtu.be/7DfYRU2K6dE?si=_AIroLulCS0MXuJY

Author
Ahmed T. Abdelwahed
