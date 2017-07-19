let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/assets/sass/app.scss', 'public/css');

mix.scripts(['resources/assets/js/coming-soon.js'], 'public/js/coming-soon.min.js')
   .version();

mix.scripts(['resources/assets/js/inbox.js'], 'public/js/inbox.min.js')
   .version();

mix.styles(['resources/assets/css/lock-2.css'], 'public/css/lock-2.min.css').version();
mix.scripts(['resources/assets/js/lock-2.js'], 'public/js/lock-2.min.js').version();

mix.scripts(['resources/assets/js/login.js'], 'public/js/login.min.js').version();

mix.styles(['resources/assets/css/login-4.css'], 'public/css/login-4.min.css').version();
