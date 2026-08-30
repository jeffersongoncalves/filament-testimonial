<?php

namespace JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use JeffersonGoncalves\FilamentTestimonial\FilamentTestimonialPlugin;
use JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\Pages\CreateTestimonial;
use JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\Pages\EditTestimonial;
use JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\Pages\ListTestimonials;
use JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\Schemas\TestimonialForm;
use JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\Tables\TestimonialsTable;
use JeffersonGoncalves\FilamentTranslatable\Resources\Concerns\Translatable;
use JeffersonGoncalves\Testimonial\Models\Testimonial;
use Throwable;

class TestimonialResource extends Resource
{
    use Translatable;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'name';

    public static function getModel(): string
    {
        return Testimonial::class;
    }

    public static function getNavigationGroup(): ?string
    {
        try {
            return FilamentTestimonialPlugin::get()->getNavigationGroup();
        } catch (Throwable) {
            return config('filament-testimonial.navigation_group', __('filament-testimonial::testimonial.navigation_group'));
        }
    }

    public static function getModelLabel(): string
    {
        return __('filament-testimonial::testimonial.item.label');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament-testimonial::testimonial.item.plural_label');
    }

    public static function form(Form $form): Form
    {
        return TestimonialForm::configure($form);
    }

    public static function table(Table $table): Table
    {
        return TestimonialsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTestimonials::route('/'),
            'create' => CreateTestimonial::route('/create'),
            'edit' => EditTestimonial::route('/{record}/edit'),
        ];
    }
}
