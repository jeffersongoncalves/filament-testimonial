## Filament Testimonial

Admin UI (CRUD) for [`jeffersongoncalves/laravel-testimonial`](https://github.com/jeffersongoncalves/laravel-testimonial) inside a Filament panel. Adds a Testimonial resource — name, role, company, avatar, rating, order, active — with translatable `content` (via `jeffersongoncalves/filament-translatable`).

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-testimonial
</code-snippet>
@endverbatim

### Configuration in the Panel

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\FilamentTestimonial\FilamentTestimonialPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            FilamentTestimonialPlugin::make()
                ->navigationGroup('Testimonials'),
        ]);
}
</code-snippet>
@endverbatim

### Resources

- **TestimonialResource** — manages `JeffersonGoncalves\Testimonial\Models\Testimonial` (name, role, company, avatar, content, rating, order, active).

The resource honors the `filament-testimonial.resources.testimonial` config override, so a custom resource class can be swapped in without republishing the plugin.

### Best Practices

- Requires a `FilamentTranslatablePlugin` registered in the same panel (the translatable `content` field relies on it for locale switching).
- Customize the navigation group globally via `config('filament-testimonial.navigation_group')` or per-plugin via `->navigationGroup()`.
- Override the resource via `config('filament-testimonial.resources.testimonial')` without touching the plugin's `register()` method.
