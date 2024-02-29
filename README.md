# SDGs

## Installation Instructions

Follow these steps to install and set up the Laravel application locally on your machine.

### 1. Clone the Repository

Clone the Laravel repository from the remote repository to your local machine using the following command:

```bash
git clone <repository_url>
```

### 2. Navigate to the Project Directory

Change into the directory of your newly cloned Laravel project:

```bash
cd <project_name>
```

### 3. Install Composer Dependencies

Install the required dependencies using Composer:

```bash
composer install
```

### 4. Copy Environment File

Copy the `.env.example` file and rename it to `.env`:

```bash
cp .env.example .env
```

### 5. Generate Application Key

Generate an application key for encryption:

```bash
php artisan key:generate
```

### 6. Run Migrations (if needed)

If the project includes database migrations, run them to set up the database schema:

```bash
php artisan migrate
```

### 7. Start the Development Server

Run the Laravel development server:

```bash
php artisan serve
```

### 8. Access the Application

Access your Laravel application by navigating to `http://localhost:8000` in your web browser.

---

Feel free to modify and expand this README file to include any additional information specific to your project.

---

# Registering a New User with Hashed Password and Additional Columns in Laravel

This guide demonstrates how to register a new user with a hashed password and additional columns directly from the PHP Artisan CLI command using Laravel's built-in functionality combined with the `tinker` command.

## Prerequisites

-   Ensure you have Laravel installed and configured on your system.
-   Access to your terminal or command prompt.

## Steps

### 1. Access Tinker

Run the following command from your terminal to access the Tinker shell:

```bash
php artisan tinker
```

### 2. Register New User

Within the Tinker shell, execute the following PHP code to create and save a new user instance with the required details:

```php
use App\Models\User;
use Illuminate\Support\Facades\Hash;

$user = new User();
$user->name = 'John Doe';
$user->email = 'user@example.com';
$user->password = Hash::make('secretPassword');
$user->save();
```

Replace `'John Doe'` with the name of the new user, `'user@example.com'` with the email, and `'secretPassword'` with the desired password.

This will create a new user with the provided name, email, and hashed password, and insert the user data into the database in your Laravel application.

## Conclusion

By following these steps, you can easily register a new user with a hashed password and additional columns directly from the PHP Artisan CLI command using Laravel's Tinker shell.

---
