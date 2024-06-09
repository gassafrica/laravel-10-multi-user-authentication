# Laravel 10 Multi-User Authentication

This repository demonstrates a Laravel application with multi-user authentication, supporting three user roles: User, Admin, and Manager.

## Features

- User role-based authentication
- Separate dashboards for Users, Admins, and Managers

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP (>=8.0)
- Composer
- Node.js and npm
- MySQL

## Installation

Follow these steps to set up the project on your local machine.

### Step 1: Clone the Repository


git clone https://github.com/gassafrica/laravel-10-multi-user-authentication.git
cd laravel-10-multi-user-authentication
### Step 2: Install Composer Dependencies


composer install
### Step 3: Install NPM Packages

npm install
### Step 4: Set Up Environment Variables

create new file .env
Copy the .env.example file to .env:


cp .env.example .env
Update the .env file with your database credentials:

env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=multiuserdb
DB_USERNAME=root
DB_PASSWORD=

### Step 5: Generate Application Key

php artisan key:generate

### Step 6: Run Migrations

php artisan migrate

### Step 7: Build Frontend Assets

npm run build

### Step 8: Serve the Application

php artisan serve
The application will be accessible at http://127.0.0.1:8000.

Authentication Setup
Register Users
Register new users via the registration form. Manually update user roles in the database using a database client or by running SQL queries:

0 for User
1 for Admin
2 for Manager
Access Control
Users with the role User will see the standard user dashboard.
Users with the role Admin will see the admin dashboard.
Users with the role Manager will see the manager dashboard.
Middleware
The application uses middleware to enforce role-based access control. These are defined in app/Http/Kernel.php and applied to routes in routes/web.php.

Blade Views
The application includes separate views for each user role:

resources/views/home.blade.php for Users
resources/views/adminHome.blade.php for Admins
resources/views/managerHome.blade.php for Managers

### Conclusion
You have successfully set up a Laravel application with multi-user authentication. This setup allows for role-based access control, ensuring that different users have access to different parts of the application. If you encounter any issues or have suggestions for improvement, please open an issue or submit a pull request.
