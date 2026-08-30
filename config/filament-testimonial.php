<?php

use JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\TestimonialResource;

return [

    /*
    |--------------------------------------------------------------------------
    | Navigation Group
    |--------------------------------------------------------------------------
    |
    | The navigation group under which the Testimonial resource is listed in
    | the Filament panel. Override per-plugin with ->navigationGroup('...').
    |
    */

    'navigation_group' => 'Testimonials',

    /*
    |--------------------------------------------------------------------------
    | Resources
    |--------------------------------------------------------------------------
    |
    | The Filament resource classes registered by the plugin. Each entry can be
    | swapped for a custom resource extending the default one.
    |
    */

    'resources' => [
        'testimonial' => TestimonialResource::class,
    ],

];
