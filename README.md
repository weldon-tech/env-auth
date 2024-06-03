# usmonaliyev/env-auth

[![Latest Stable Version](http://poser.pugx.org/usmonaliyev/env-auth/v)](https://packagist.org/packages/usmonaliyev/env-auth)
[![Total Downloads](http://poser.pugx.org/usmonaliyev/env-auth/downloads)](https://packagist.org/packages/usmonaliyev/env-auth)
[![License](http://poser.pugx.org/usmonaliyev/env-auth/license)](https://packagist.org/packages/usmonaliyev/env-auth)
[![PHP Version Require](http://poser.pugx.org/usmonaliyev/env-auth/require/php)](https://packagist.org/packages/usmonaliyev/env-auth)


The package provides middleware for Laravel applications to handle Basic Authentication and Secret Key Authentication using credentials stored in the `.env` file.

## Installation

You can install the package via composer:

```bash
composer require usmonaliyev/env-auth
```

## Configuration

Add the necessary credentials to your `.env` file.

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
    'basic.env' => \Usmonaliyev\EnvAuth\Middleware\BasicEnv::class,
    'secret.env' => \Usmonaliyev\EnvAuth\Middleware\SecretEnv::class,
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