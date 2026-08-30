<div class="filament-hidden">

![Filament Testimonial](https://raw.githubusercontent.com/jeffersongoncalves/filament-testimonial/3.x/art/jeffersongoncalves-filament-testimonial.png)

</div>

# Filament Testimonial

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-testimonial.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-testimonial)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-testimonial/tests.yml?branch=3.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-testimonial/actions?query=workflow%3Atests+branch%3A3.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-testimonial/pint.yml?branch=3.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-testimonial/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A3.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-testimonial.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-testimonial)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-testimonial.svg?style=flat-square)](LICENSE)

Filament admin UI (CRUD) for [`jeffersongoncalves/laravel-testimonial`](https://github.com/jeffersongoncalves/laravel-testimonial) — manage testimonials with translatable content, inside a [Filament](https://filamentphp.com) panel.

## Compatibility

| Package Version | Filament Version |
|-----------------|-------------------|
| [1.x](https://github.com/jeffersongoncalves/filament-testimonial/tree/1.x) | 3.x |
| [2.x](https://github.com/jeffersongoncalves/filament-testimonial/tree/2.x) | 4.x |
| [3.x](https://github.com/jeffersongoncalves/filament-testimonial/tree/3.x) | 5.x |

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-testimonial:"^3.0"
```

Register the plugin in your panel provider:

```php
use JeffersonGoncalves\FilamentTestimonial\FilamentTestimonialPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            FilamentTestimonialPlugin::make(),
        ]);
}
```

The Testimonial resource renders a translatable `content` field, so a [`jeffersongoncalves/filament-translatable`](https://github.com/jeffersongoncalves/filament-translatable) plugin instance must also be registered in the same panel.

## Configuration

Publish the config file:

```bash
php artisan vendor:publish --tag="filament-testimonial-config"
```

```php
return [
    'navigation_group' => 'Testimonials',

    'resources' => [
        'testimonial' => \JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\TestimonialResource::class,
    ],
];
```

Or configure fluently:

```php
FilamentTestimonialPlugin::make()->navigationGroup('Support');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
