# 💬 Forum API 
This project is built using Laravel Lumen, JWT, and MySQL. It provides endpoints for managing posts, topics, and users. The project's folder structure includes the usual Laravel Lumen folders, such as app, bootstrap, config, database, public, resources, routes, storage, tests, and vendor. 


## Technologies used
<p align="center">
  <img src="https://img.shields.io/badge/-Postman-FF6C37?style=for-the-badge&logo=postman&logoColor=white" alt="Postman Icon" />
  <img src="https://img.shields.io/badge/-JWT-000000?style=for-the-badge" alt="JWT Icon" />
  <img src="https://img.shields.io/badge/-PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP Icon" />
  <img src="https://img.shields.io/badge/-Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel Icon" />
  <img src="https://img.shields.io/badge/-JSON-000000?style=for-the-badge&logo=json&logoColor=white" alt="JSON Icon" />
  <img src="https://img.shields.io/badge/-Lumen-E74430?style=for-the-badge&logo=lumen&logoColor=white" alt="Lumen Icon" />
  <img src="https://img.shields.io/badge/-REST%20API-FF6C37?style=for-the-badge" alt="REST API Icon" />
  <img src="https://img.shields.io/badge/-MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL Icon" />
</p>


# Usage 📑

## Create an environment variable file
```bash
cp .env.example .env
```
And fill the variables with your own data

## Install dependencies
```bash
composer install
```

Start the server
```bash
php -S localhost:8000 -t public
```

## Routes


* **`GET /login`**: Requeries a username and password and returns a JWT token


## Routes inside middleware (Protected routes)
* /users
* /topics
* /posts

each route has the following methods:
* **`Index`**: GET /route 
* **``Show``**: GET /route/{id} 
* **`Store`**: POST /route 
* **`Update`**: PUT /route/{id} 
* **`Destroy`**: DELETE /route/{id} 


### Login example

1. Go to the login route

```bash
http://localhost:8000/login
```
2. Send a **GET** request with the following body
```json
{
    "username": "string",
    "password": "string"
}
```

## Useful commands

### 1. Create a project
```sh
    composer create-project --prefer-dist laravel/lumen [project-name]
```
### 1. 1 Create a schema/migration
```sh
    php artisan make:migration create_users_table
```

### 2. Execute migrations
```sh
   php artisan migrate
```
###### Only frist time (create the tables)

### 3. Reset and re-create again, (when we make changes in the migrations)
```sh
   php artisan migrate:fresh
```
### 4. Fill the tables with random data
```sh
   php artisan db:seed nameOfTheSeeder
```
### 5. insert data in the tables
```sh
   php artisan db:seed
``` 
### 6. Create a seeder
```sh
   php artisan make:seeder nameTableSeeder
```
###### Note: the name of the seeder must be the name of the table in singular and start with capital letter

###### Example
```sh
php artisan make:model Topic
```
# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/lumen)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Resources 
* [JWT File](https://jwt.io/libraries)  
