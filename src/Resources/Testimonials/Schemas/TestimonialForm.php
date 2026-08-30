<?php

namespace JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;

class TestimonialForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('filament-testimonial::testimonial.item.label'))
                    ->schema([
                        TextInput::make('name')
                            ->label(__('filament-testimonial::testimonial.item.fields.name'))
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        TextInput::make('role')
                            ->label(__('filament-testimonial::testimonial.item.fields.role'))
                            ->maxLength(255),
                        TextInput::make('company')
                            ->label(__('filament-testimonial::testimonial.item.fields.company'))
                            ->maxLength(255),
                        FileUpload::make('avatar')
                            ->label(__('filament-testimonial::testimonial.item.fields.avatar'))
                            ->image()
                            ->columnSpanFull(),
                        Textarea::make('content')
                            ->label(__('filament-testimonial::testimonial.item.fields.content'))
                            ->required()
                            ->rows(4)
                            ->columnSpanFull(),
                        TextInput::make('rating')
                            ->label(__('filament-testimonial::testimonial.item.fields.rating'))
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(5),
                        TextInput::make('order')
                            ->label(__('filament-testimonial::testimonial.item.fields.order'))
                            ->numeric()
                            ->default(0),
                        Toggle::make('is_active')
                            ->label(__('filament-testimonial::testimonial.item.fields.is_active'))
                            ->default(true),
                    ])->columns(2),
            ]);
    }
}
