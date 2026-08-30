<?php

namespace JeffersonGoncalves\FilamentTestimonial\Resources\Testimonials\Tables;

use Filament\Tables\Actions;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TestimonialsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('avatar')
                    ->label(__('filament-testimonial::testimonial.item.fields.avatar'))
                    ->circular(),
                TextColumn::make('name')
                    ->label(__('filament-testimonial::testimonial.item.fields.name'))
                    ->searchable(),
                TextColumn::make('role')
                    ->label(__('filament-testimonial::testimonial.item.fields.role'))
                    ->toggleable(),
                TextColumn::make('company')
                    ->label(__('filament-testimonial::testimonial.item.fields.company'))
                    ->toggleable(),
                TextColumn::make('rating')
                    ->label(__('filament-testimonial::testimonial.item.fields.rating')),
                TextColumn::make('order')
                    ->label(__('filament-testimonial::testimonial.item.fields.order'))
                    ->sortable(),
                IconColumn::make('is_active')
                    ->label(__('filament-testimonial::testimonial.item.fields.is_active'))
                    ->boolean(),
                TextColumn::make('created_at')
                    ->label('Created at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('order')
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
