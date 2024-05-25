# common serving command

nmp install

composer install

php artisan serve

npm run dev

npm run build //for production or serve online via ngrok

php artisan optimize


# common development command

php artisan  make:view <view-name>

php artisan make:controller <controller-name>

php artisan make:model <model-name>

php artisan make:migration <migration-name>

php artisan make:middleware

php artisan make:command CustomTask

php artisan custom:task //to run task manually

crontab -e //check server cronjob

* * * * * cd /path/to/your/project && php artisan schedule:run >> /dev/null 2>&1 //this will execute cronjob

tail -f storage/logs/laravel.log //monitor logs

php artisan list

php artisan schedule:list

php artisan app:custom-task
"# laraveltraining.day2" 
"# laraveltraining.day2" 


queue
---------
QUEUE_CONNECTION=redis
QUEUE_CONNECTION=database
QUEUE_CONNECTION=sync


php artisan make:job SendEmailJob

php artisan queue:work //for queue worker

php artisan queue:listen //for queue listener

php artisan queue:work --queue=emails --tries=3

composer require laravel/horizon

Authentication
-------------------
php artisan migrate
php artisan make: auth //old command


create database command
-------------------
CREATE DATABASE laravel_app;

composer require laravel/ui
php artisan ui bootstrap 
php artisan ui bootstrap --auth

php artisan make:controller AuthenController

php artisan make:middleware AlreadyLoggedIn
php artisan make:middleware AuthCheck


add guzzle http client
----------------------
composer require guzzlehttp/guzzle

create simple api
--------------------------
php artisan make:model Books -m // this also ato create migration file
php artisan migrate
php artisan make:controller BooksController

C:\laragon\www\laraveltraining.day2>php artisan migrate:status

database seeder
--------------------------------
php artisan make:seeder BooksSeeder