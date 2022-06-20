<p align="center">
    <img src="https://user-images.githubusercontent.com/19103498/168256464-76356d9a-a679-45c6-9993-e5be7be5c1ee.png">
</p>

<p align="center">
    <img src="https://img.shields.io/badge/Vue.js-v3.x-32a87d?style=flat&logo=vue.js">
    <img src="https://img.shields.io/badge/Inertia.js-v0.6-c852ff?style=flat&logo=inertia.js">
    <img src="https://img.shields.io/badge/Laravel-v9.x-FF2D20?style=flat&logo=laravel&logoColor=fff">
    <img src="https://img.shields.io/badge/TailwindCSS-v3.x-458099?style=flat&logo=tailwindcss">
    <img src="https://img.shields.io/badge/Alpine.js-v3.x-4bbdbf?style=flat&logo=alpine.js">
</p>

<p align="center">
    An easy way to start developing with the VILT stack*.
</p>

## Features
- [Vue.js 3](https://vuejs.org/) ([Pinia](https://pinia.vuejs.org/), [VueUse](https://vueuse.org/), [Collect.js](https://collect.js.org/), [Toastification](https://vue-toastification.maronato.dev/))
- [Inertia.js](https://inertiajs.com/) (SPA)
- [Laravel 9](https://laravel.com/)
- [TailwindCSS](https://tailwindcss.com/) ([Typography](https://github.com/tailwindlabs/tailwindcss-typography), [Forms](https://github.com/tailwindlabs/tailwindcss-forms), [Animate](https://github.com/jamiebuilds/tailwindcss-animate))
- [Alpine.js](https://alpinejs.dev/)
- [Ziggy Route](https://github.com/tighten/ziggy)

## Installation

#### Auto installation using a script:

1. Clone this repo
2. `php install.php`
3. Enjoy 🤤

#### Manual installation:

1. Clone this repo
2. `composer install`
3. `npm install`
4. `cp .env.example .env`
5. `php artisan key:generate`

#### Use Laravel Breeze instead of this shit 🤟

1. `composer create-project laravel/laravel vilt-stack && cd vilt-stack`
2. `composer require laravel/breeze --dev`
3. `php artisan breeze:install vue --inertia` (add `--ssr` for SSR instead of SPA)
4. `npm install`

## Development

1. `npm run watch`
2. `php artisan serve`
3. Go to http://localhost:8000
---

**this is my implementation for me, does not pretend to be anything.*
