# Umang Portfolio (Fully Updated)

Ye latest full update hai jisme static aur Laravel Blade dono version milenge.

## Tech Used
- Bootstrap 5
- CSS (3D + Glassmorphism)
- JavaScript (Tilt + Reveal + Typed text)
- Laravel Blade compatible layout

## Files
- `index.html` → static preview
- `style.css` → complete design system
- `script.js` → interactions/animations
- `resources/views/portfolio.blade.php` → Laravel view

## Laravel integration
1. `style.css` aur `script.js` ko Laravel `public/` folder me rakho.
2. Blade file `resources/views/portfolio.blade.php` me rakho.
3. Route add karo:

```php
Route::get('/portfolio', function () {
    return view('portfolio');
});
```

4. Run:

```bash
php artisan serve
```

5. Open:

```text
http://127.0.0.1:8000/portfolio
```

## Static preview
```bash
python3 -m http.server 8000
```
Open browser:
```text
http://127.0.0.1:8000/
```
