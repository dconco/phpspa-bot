# PhpSPA Template

A simple, minimal template for building single-page applications with PHP using the [PhpSPA Framework](https://github.com/dconco/phpspa).

## Quick Start

```bash
composer create-project phpspa/phpspa MyApp
cd MyApp

composer start
```

## Development

### With PHP Development Server

```bash
php -S localhost:8000 -t public
```

### With Apache

1. Point your Apache document root to the `public/` directory
2. Or create a virtual host:

```apache
<VirtualHost *:80>
    DocumentRoot /path/to/project/public
    ServerName myapp.local
    
    <Directory /path/to/project/public>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

### With Tailwind CSS in Development

To run with Tailwind CSS in watch mode (rebuilds CSS on changes):

```bash
npm run dev
```

Then in another terminal run either:
- `composer start` (PHP server)
- Or access via Apache at your configured domain

## What's Included

- **2 Simple Pages**: Home and About
- **Clean Layout**: Minimal HTML structure
- **Tailwind CSS**: For styling
- **Responsive**: Works on all devices

## Project Structure

```
src/
├── index.php          # App entry point
├── layout/
    └── Layout.php     # Main layout
└── pages/
    ├── HomePage.php   # Home page
    └── AboutPage.php  # About page
```

## Customize

1. Edit content in `pages/` files
2. Modify styles by updating Tailwind classes
3. Add new pages by creating new files and registering routes in `index.php`

That's it! Simple and ready to go.

---

Built with [PhpSPA Framework](https://phpspa.vercel.app)
