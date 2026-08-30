---
name: filament-testimonial-development
description: Build and work with Filament Testimonial features, including the Testimonial resource and panel configuration.
---

# Filament Testimonial Development

## When to use this skill

Use this skill when:
- Integrating Filament Testimonial into a panel
- Customizing the Testimonial resource
- Overriding the resource class via config

## Configuration

### Basic Setup

```php
use JeffersonGoncalves\FilamentTestimonial\FilamentTestimonialPlugin;

FilamentTestimonialPlugin::make()
    ->navigationGroup('Support');
```

### Overriding the Resource

```php
// config/filament-testimonial.php
return [
    'resources' => [
        'testimonial' => \App\Filament\Resources\Testimonials\CustomTestimonialResource::class,
    ],
];
```

## Resources

### TestimonialResource

Model: `JeffersonGoncalves\Testimonial\Models\Testimonial`. Fields: `name` (required), `role`, `company`, `avatar` (image upload), `content` (translatable), `rating` (1-5), `order`, `is_active`.

## Troubleshooting

### Plugin not registered

**Cause**: Plugin not added to PanelProvider.

**Solution**: Add `FilamentTestimonialPlugin::make()` to the `plugins()` array in your PanelProvider.

### Locale switcher missing on Create/Edit/List pages

**Cause**: `FilamentTranslatablePlugin` not registered in the same panel.

**Solution**: Add `FilamentTranslatablePlugin::make()` alongside `FilamentTestimonialPlugin::make()` in the panel's `plugins()` array.
