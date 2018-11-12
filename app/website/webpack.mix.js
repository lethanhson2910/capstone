const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
// mix.scripts([
//     'public/source/js/bootstrap.min.js',
//     'public/source/js/jquery-2.1.4.min.js',
//     'public/source/js/jquery.easing.min.js',
//     'public/source/js/jquery.min.js',
//     'public/source/js/mobile.min.js',
//     'public/source/js/jquery.easing.min.js',
// ]);
