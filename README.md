Hi there :wave:

# Jobs Research App - LARAVEL 9

An app for listing jobs.

## Usage

### Migrations
To create all the nessesary tables and columns, run the following
```
php artisan migrate
```

### Seeding The Database
To add the listings with a single user, run the following
```
php artisan db:seed
```

### Running The App Approach #1 - Composer
This app can run by using Laravel Sail which is installed via composer

Laravel Sail is a light-weight command-line interface for interacting with Laravel's default Docker development environment. 
Sail provides a great starting point for building a Laravel application using PHP, MySQL, and Redis without requiring prior Docker experience.

Upload the files to your document root, or run the following command lines:
```
1. Make sure you have Docker installed on your machine
2. composer install
3. To start the server: sail up -d
4. To stop the server: sail down
```

### Running The App Approach #2 - No Composer
Run the following command line

docker-compose up -d
