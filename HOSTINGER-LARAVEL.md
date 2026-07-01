# Hostinger Laravel Upload Notes

This folder now includes Laravel-ready files converted from the static HTML site.

## Upload Into An Existing Laravel Project

Copy these into the Laravel project root:

- `resources/views/*.blade.php`
- `routes/web.php`

Copy these into Laravel's `public` folder:

- `public/styles.css`
- `public/assets/`

## Routes

The site now uses clean Laravel URLs:

- `/`
- `/about`
- `/services`
- `/services/solar`
- `/services/hvac`
- `/partner`
- `/contact`
- `/quote`

The old `.html` URLs redirect to the new Laravel routes.

## Hostinger Check

Make sure the domain document root points to Laravel's `public` directory. If the project is inside a folder such as `domains/example.com/laravel-app`, the domain should serve from:

```text
laravel-app/public
```

After upload, clear Laravel caches from Terminal or SSH if available:

```bash
php artisan optimize:clear
```
