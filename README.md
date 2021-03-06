Hi there :wave:

# Jobs Research App - LARAVEL 9

An app for listing jobs.

## Usage

### Migrations
To create all the necessary tables and columns, run the following
```
php artisan migrate
```

### Seeding The Database
To add the listings with a single user, run the following
```
php artisan db:seed
```

### Running The App
Upload the files to your document root, this app uses the framework Laravel and the server runs by using the Package Sail, which is installed via composer:

1. Make sure you have Docker installed on your machine
2. In the Terminal run "composer install" into the project
3. Run the command:

```bash
$ cp .env.example .env 
$ php artisan key:generate --ansi
$ sail up -d
```

4. After finish docker up the machine:

```bash
$ sail composer install
$ sail artisan migrate --seed
```

5. To stop the server un the command "sail down"
