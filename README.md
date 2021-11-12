## Laravel Blog Application

A simple blog for demonstration purpose for CRUD functionality based on Laravel. This application uses below Laravel features.

-   Authentication.
-   Blade
-   Migrations
-   Seeding & factories
-   ORM DBMS Operations
-   Routes & Secure routes
-   Pagination

### Local Setup

Setting up your development environment on your local machine :

Note: Please copy the env.example file from below commands and add your database details in .env file.

```
$ git clone https://github.com/gaurav-js-dev/laravel-practice.git
$ cp .env.example .env
$ php artisan serve
```

### Before starting

You need to run the migrations with the seeds :

```
$ artisan migrate --seed
```

This will create a new user that you can use to sign in :

### Demo login info

After running above command default user is generated. User can login to add post at /login path and also register at /register.
To access the admin area use following credentials

                email => adminjohn@gmail.com,
                password => Laravelproject@1234

                email => userjoe@gmail.com,
                password => Laravelproject@1234,
