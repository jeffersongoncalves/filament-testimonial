<?php

use JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\Pages\CreateTestimonial;
use JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\Pages\EditTestimonial;
use JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\Pages\ListTestimonials;
use JeffersonGoncalves\Testimonial\Models\Testimonial;
use Livewire\Livewire;

beforeEach(function () {
    filament()->setCurrentPanel(filament()->getPanel('admin'));
});

it('can render the testimonial list page', function () {
    Livewire::test(ListTestimonials::class)->assertSuccessful();
});

it('can list testimonials in the table', function () {
    $testimonial = Testimonial::create([
        'name' => 'Jane Doe',
        'content' => 'Great product, highly recommend it.',
    ]);

    Livewire::test(ListTestimonials::class)
        ->assertCanSeeTableRecords([$testimonial]);
});

it('can create a testimonial', function () {
    Livewire::test(CreateTestimonial::class)
        ->fillForm([
            'name' => 'John Smith',
            'role' => 'CEO',
            'company' => 'Acme Inc.',
            'content' => 'Outstanding service from start to finish.',
            'rating' => 5,
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(Testimonial::query()->where('name', 'John Smith')->exists())->toBeTrue();
});

it('can edit a testimonial', function () {
    $testimonial = Testimonial::create([
        'name' => 'Alice Johnson',
        'content' => 'Very satisfied with the results.',
    ]);

    Livewire::test(EditTestimonial::class, ['record' => $testimonial->getRouteKey()])
        ->assertSuccessful()
        ->fillForm(['content' => 'Extremely satisfied with the results.'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($testimonial->refresh()->content)->toBe('Extremely satisfied with the results.');
});
