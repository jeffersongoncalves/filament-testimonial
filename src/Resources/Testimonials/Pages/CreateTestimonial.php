<?php

namespace JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\Pages;

use Filament\Resources\Pages\CreateRecord;
use JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\TestimonialResource;
use JeffersonGoncalves\FilamentTranslatable\Actions\LocaleSwitcher;
use JeffersonGoncalves\FilamentTranslatable\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateTestimonial extends CreateRecord
{
    use Translatable;

    protected static string $resource = TestimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
        ];
    }
}
