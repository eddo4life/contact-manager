# Contact Management Application

This is a web-based contact management application built with Laravel and Vue.js.

## Prerequisites

Before you begin, ensure you have the following installed on your system:
- PHP (version 8.0+)
- Composer
- Node.js and npm

1. **PHP Extensions**:
   Make sure the following extensions are uncommented in your `php.ini` file:

   ```ini
   extension=fileinfo
   extension=pdo_sqlite

## Getting Started

Follow these steps to set up and run the project locally.


### 1. Clone the Repository

      git clone https://github.com/eddo4life/contact-manager.git
      cd contact-manager/contact-manager

### 2. Install Dependencies
Run the following commands to install PHP and Node.js dependencies:

    composer install
    npm install

### 3. Configure Environment Variables
First, copy the example environment file to create your .env file:

    cp .env.example .env  ('copy .env.example .env' on windows) 
Next, open the .env file and ensure the APP_URL is set to http://127.0.0.1:8000 or http://localhost:8000:

APP_URL=http://127.0.0.1:8000
(This solve an unexpected 419 error)

### 4. Database Setup
Run the migrations:

        php artisan migrate

Press enter to choose the default [yes] to create the database

### 5. Generate Application Key
Laravel requires an application key for security. Generate it using:

        php artisan key:generate

### 6. Create Symbolic Link for Storage
To link the storage folder, run the following command:

        php artisan storage:link

(This solve an unexpected 419 error)

### 7. Compile Assets
To compile the front-end assets, run:

        npm run dev

### 8. Serve the Application
Start the Laravel development server:

        php artisan serve

The application will be accessible at http://127.0.0.1:8000.
