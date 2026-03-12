# Umang Portfolio (Full Updated 3D Version)

Ye portfolio ka **new full updated version** hai with:
- Laravel Blade support
- Bootstrap 5 layout
- CSS 3D + glassmorphism design
- JavaScript tilt + reveal animations

## Project Structure
- `index.html` → Static preview version
- `style.css` → Complete styling + 3D visuals
- `script.js` → 3D tilt + reveal animation
- `resources/views/portfolio.blade.php` → Laravel Blade version

## Laravel me use kaise kare
1. `style.css` aur `script.js` ko Laravel ke `public/` me rakho.
2. `resources/views/portfolio.blade.php` file ko project me add karo.
3. `routes/web.php` me route add karo:

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

## Static output dekhna
```bash
python3 -m http.server 8000
```
Open:
```text
http://127.0.0.1:8000/
```

## Output image lena
- Browser se manual screenshot le sakte ho.
- Ya Playwright automation use karke image generate kar sakte ho.
