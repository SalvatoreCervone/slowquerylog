# In develop

This package is in dev mode

## Installation

You can install the package via composer:

```bash
composer require salvatorecervone/slowquerylog
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="slowquerylog-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="slowquerylog-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="slowquerylog-views"
```

## Usage

```php

```

## Credits

- [Salvatore](https://github.com/SalvatoreCervone)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
