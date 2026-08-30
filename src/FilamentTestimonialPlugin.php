<?php

namespace JeffersonGoncalves\FilamentTestimonial;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentTestimonial\Concerns\HasTestimonialPluginConfig;
use JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\TestimonialResource;

class FilamentTestimonialPlugin implements Plugin
{
    use HasTestimonialPluginConfig;

    public function getId(): string
    {
        return 'filament-testimonial';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'testimonial' => TestimonialResource::class,
        ]));
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
