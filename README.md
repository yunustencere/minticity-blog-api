## Task Order Api
The app is simple laravel blog api(frontend is available on https://github.com/yunustencere/minticity-blog-frontend) uses some of its features like model, controller, service layer, validation by form requests

### Installation
Clone the project

Copy .env.example and rename it as .env

Go to directory of project

Run
```
$ composer install
```
to install dependencies

Run
```
$ php artisan key:generate
```

You should run
```
$ php artisan migrate
```
to create database tables.

optional
```
$ php artisan db:seed
```
to seed the database with related entries.

### To Run The App

```
$ php artisan serve
```

### Endpoints

postman collection is available at the root directory of the project as "laravel_blog_api_yunus.postman_collection.json"

or 

check api.php


