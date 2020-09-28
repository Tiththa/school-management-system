# School Management System with Laravel 5.6
School Management System with laravel 5.6
The project is incomplete, however is usable to modify it.

## Installation
```
git clone the project
cd /your-project
composer install
cp .env.example .env // Make a copy of the env file and save as .env
```

```
php artisan key:generate
```
Create a mysql database using phpmyadmin or anyother client and configure those details in your env file
```
DB_DATABASE=DATABSE_NAME_YOUR_CREATED
DB_USERNAME=YOUR_DATABASE_USERNAME
DB_PASSWORD=YOUR_DATABASE_PASSWORD
```

Database Migration and Seeding fake data
```
php artisan migrate --seed  // Migrate and Seed the database (ALl in-one command)
```
or You can individually seed with
```
php artisan db:seed  
```

Please note:
`DatabaseSeeder.php` includes `AdminsTableSeeder` and 'UsersTableSeeder'. The `AdminsTableSeeder` includes `BooksSeeder` as well. You can change the respective values to generate fake data as you wish.

setup your vhost files or `php artisan serve`.

You can go to the admin dashboard by /admin on the domain, use the email and password from database.

The user credentails can taken from your database and the password is `password` mentioned in `seeds/UsersTableSeeder`

#### Features 

- Employee Management ( Payroll management and calculation)
- Library Management (Book managing with returning dates)
- Student Information Management
- Achievements/Events/Embedded Google Calendar management
- Pdf generating
- Reminder Emails
- Execel and CSV importing for tables
- Barcode attendance system
