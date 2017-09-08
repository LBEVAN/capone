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

mix
    .js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/dropdown.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/nav.scss', 'public/css')
    .sass('resources/assets/sass/footer.scss', 'public/css')
    .sass('resources/assets/sass/home.scss', 'public/css')
    .sass('resources/assets/sass/socials.scss', 'public/css')
    .sass('resources/assets/sass/contact.scss', 'public/css')
    .sass('resources/assets/sass/store.scss', 'public/css')
    .sass('resources/assets/sass/product.scss', 'public/css');
