<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Star Wars Project

Below are the steps to install the Project on the Local Machine.

- Clone this Project to the local machine by using "git clone https://github.com/sambhavrajput26/starship_api.git" command.
- Once project is cloned open the project via command line and enter into the project root directory via command "cd starship_api".
- Once you're inside the project root directory check if you have composer by typing simply "composer" in command line it will let you know whether you have composer already installed or you need to install it before moving to the next step.
- Next step once you have composer installed on the system then enter "composer update" command via CLI and wait until all packages get installed.
- Open the MYSQL and create database with name "starships_api". Then open ".env" file from the main root of the project and update the "DB_USERNAME" and "DB_PASSWORD" according to the local machine as of mine username was "root" and password was blank.
- After that enter "php artisan migrate" command which will create the tables through migrations automatically.
- Once Migration is done successfully then enter "php artisan db:seed --class=StarshipCategorySeeder" command to add sample data in table "StarshipCategory". After that second command we need to enter is "php artisan db:seed --class=StarshipTableSeeder" to run the seeder to add the sample details in the StarshipTable.
- After this run the server by entering "php artisan serve" command and project will start running.
- Yayy!! Project is UP now and we can hit "http://localhost:8000/api/v1/starships/" in the URL bar to list all the Starwarships and "http://localhost:8000/api/v1/starships/{starship_id}" here {starship_id} is the ID of the starship which we need to add at the end of the URL to fetch single starship by ID, for eg: "http://localhost:8000/api/v1/starships/1" where 1 is the ID of the starship.

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Requirements for Project

- Laravel version 8 
- XAMPP
- MYSQL Database


