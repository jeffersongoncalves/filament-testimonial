<?php

namespace JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\TestimonialResource;
use JeffersonGoncalves\FilamentTranslatable\Actions\LocaleSwitcher;
use JeffersonGoncalves\FilamentTranslatable\Resources\Pages\ListRecords\Concerns\Translatable;

class ListTestimonials extends ListRecords
{
    use Translatable;

    protected static string $resource = TestimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
