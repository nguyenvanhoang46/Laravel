const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    // .css('resources/css/test.css', 'public/css')
    .css('resources/css/nucleoicons.css', 'public/css')
    .css('resources/css/nucleo-svg.css', 'public/css')
    .css('resources/css/argon-dashboard.css', 'public/css')
    .css('resources/css/index.css', 'public/css')
    .js('resources/js/plugins/perfect-scrollbar.min.js', 'public/js');
