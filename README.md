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

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**
-   **[CMS Max](https://www.cmsmax.com/)**
-   **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
