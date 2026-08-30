<?php

use JeffersonGoncalves\FilamentTestimonial\FilamentTestimonialPlugin;
use JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\TestimonialResource;

it('has a valid plugin id', function () {
    expect(FilamentTestimonialPlugin::make()->getId())->toBe('filament-testimonial');
});

it('resolves to the same instance registered in the panel', function () {
    expect(FilamentTestimonialPlugin::get())->toBeInstanceOf(FilamentTestimonialPlugin::class);
});

it('registers the resource in the panel', function () {
    $panel = filament()->getPanel('admin');

    expect($panel->getResources())->toContain(TestimonialResource::class);
});

it('falls back to the default navigation group', function () {
    expect(FilamentTestimonialPlugin::make()->getNavigationGroup())->toBe('Testimonials');
});

it('allows overriding the navigation group fluently', function () {
    expect(FilamentTestimonialPlugin::make()->navigationGroup('Support')->getNavigationGroup())->toBe('Support');
});
