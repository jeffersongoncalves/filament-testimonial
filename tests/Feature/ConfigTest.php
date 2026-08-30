<?php

it('loads the filament-testimonial config file', function () {
    expect(config('filament-testimonial'))->toBeArray();
});

it('has a default navigation group', function () {
    expect(config('filament-testimonial.navigation_group'))->toBe('Testimonials');
});

it('registers the resource in config', function () {
    expect(config('filament-testimonial.resources'))->toBeArray()
        ->toHaveKey('testimonial');
});
