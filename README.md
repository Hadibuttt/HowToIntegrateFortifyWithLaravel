# HowToIntegrateFortifyWithLaravel

Steps to set up:
- Clone this repository
- Copy .env.example file and rename it to .env
- In terminal Run Command >> composer install
- In .env file set database name according to the database you created in phpmyadmin (local)
- In terminal Run Command >> php artisan key:generate
- In terminal Run Command >> php artisan migrate
- In terminal Run Command >> php artisan serve
