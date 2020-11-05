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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');
    mix.styles([
    'public/assets/dashboard/css/style.css', 
    'public/assets/css/spur.css',
    'public/assets/css/datatables.min.css',
    'public/assets/css/nutri.css',  
    // 'public/assets/dashboard/css/bootstrap.min.css',
    ], 'public/css/all.css');

    mix.scripts([
        'public/assets/cdn/jquery-3.3.1.slim.min.js',
        'public/assets/cdn/popper.min.js',
        'public/assets/cdn/4.3.1.bootstrap.min.js',
        'public/assets/js/spur.js',
        'public/assets/cdn/3.2.0.bootstrap.min.js',
        'public/assets/cdn/1.10.18datatables.min.js',
        // 'public/assets/cdn/1.9.1.jquery.min.js',
        'public/assets/cdn/2.7.3.Chart.bundle.min.js',
        'public/assets/cdn/1.10.12.jquery.dataTables.min.js'
    ], 'public/js/all.js');