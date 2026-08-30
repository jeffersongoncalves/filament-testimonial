<?php

namespace JeffersonGoncalves\FilamentTestimonial;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentTestimonialServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-testimonial';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile()
            ->hasTranslations();
    }
}
