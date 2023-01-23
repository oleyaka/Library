## General description

This is a test task for "Techinvest project". Implemented in Laravel. 

Books are added via a form on the page "Add", stored in the database and displayed on the "Books" page.

## Important files

Routing is implemented in the file: route\web.php

The model files are located in the  folder app\Models (Book, Author)

The developed controllers are located in the folder: app\Http\Controllers (BookController)

The migration files are located in the directory: database\migrations

The resource files are located in the directory: resources\

## Installation

Create database MySql "library" on port 3306.

Clone the repository

    git clone https://github.com/oleyaka/Library

Switch to the repo folder

    cd Library

Install all the dependencies using composer

    composer install
    
    composer update

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000
