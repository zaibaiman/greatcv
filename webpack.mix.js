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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/css/icomoon.css',
    'resources/assets/css/bootstrap.css',
    'resources/assets/css/core.css',
    'resources/assets/css/components.css',
    'resources/assets/css/colors.css',
    'resources/assets/css/custom.css'
], 'public/css/vendor.css');

mix.scripts([
    'resources/assets/js/vendor/jquery.js',
    'resources/assets/js/vendor/bootstrap.js'
], 'public/js/vendor.js')

mix.copy('resources/assets/fonts', 'public/fonts');
mix.copy('resources/assets/images', 'public/images');