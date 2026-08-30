<?php

namespace JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\TestimonialResource;
use JeffersonGoncalves\FilamentTranslatable\Actions\LocaleSwitcher;
use JeffersonGoncalves\FilamentTranslatable\Resources\Pages\EditRecord\Concerns\Translatable;

class EditTestimonial extends EditRecord
{
    use Translatable;

    protected static string $resource = TestimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
