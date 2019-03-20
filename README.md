# School Management System with Laravel 5.6
School Management System with laravel 5.6
The project is incomplete, however is usable to modify it.

```
composer update
```

Copy paste the env file and setup your mysql database

```
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan db:seed --class=UsersTableSeeder
php artisan db:seed --class=AdminsTableSeeder

```

setup your vhost files.

You can go to the admin dashboard by /admin on the domain, use the email and password from database.

#### Features 

- Employee Management ( Payroll management and calculation)
- Library Management (Book managing with returning dates)
- Student Information Management
- Achievements/Events/Embedded Google Calendar management
- Pdf generating
- Reminder Emails
- Execel and CSV importing for tables
- Barcode attendance system
