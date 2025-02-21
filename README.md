# weldon/env-auth

![Packagist Dependency Version](https://img.shields.io/packagist/dependency-v/weldon/env-auth/php)
![Total Downloads](https://img.shields.io/packagist/dt/weldon/env-auth.svg)
![Latest Version on Packagist](https://img.shields.io/packagist/v/weldon/env-auth.svg)
![Packagist License](https://img.shields.io/packagist/l/weldon/env-auth)


The package provides middleware for Laravel applications to handle Basic Authentication and Secret Key Authentication using credentials stored in the `.env` file.

## Installation

You can install the package via composer:

```bash
composer require weldon/env-auth
```

## Publish

Publish the package configuration:

```bash
php artisan vendor:publish --provider="Weldon\EnvAuth\EnvAuthServiceProvider"
```

## Configuration

Add the necessary credentials to your `.env` file.

If you want to modify keys of variables, you need to change `config/env-auth.php` after publish config file.

For `BasicEnv` middleware:

```dotenv
BASIC_USERNAME=your-username
BASIC_PASSWORD=your-password
```

For `SecretEnv` middleware:

```dotenv
AUTH_SECRET_KEY=your-secret-key
```

## Usage

### Register middleware

If you are using Laravel 11.x check out this link: https://laravel.com/docs/11.x/middleware#middleware-aliases

In your Laravel application's `app/Http/Kernel.php` file, register the new middleware classes:

```php
protected $routeMiddleware = [
    // Other middleware
    'basic.env' => \Weldon\EnvAuth\Middleware\BasicEnv::class,
    'secret.env' => \Weldon\EnvAuth\Middleware\SecretEnv::class,
];
```

### Protect routes

Apply the middleware to your routes in `routes/web.php` or `routes/api.php`.

```php
Route::middleware('basic.env')->group(function () {

    ...
});
```

## Testing

Use the following cURL command to test Basic Authentication:

```bash
curl -u your-username:your-password http://your-app-url/basic-protected-route
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
