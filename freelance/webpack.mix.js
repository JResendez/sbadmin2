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

/*mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');*/


    mix.styles([
        'resources/plantilla/css/sb-admin-2.min.css',
        'resources/plantilla/css/sb-admin-2.css'
    ], 'public/css/plantilla.css')
    .scripts([
        'resources/plantilla/vendor/jquery/jquery.min.js',
        'resources/plantilla/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'resources/plantilla/vendor/jquery-easing/jquery.easing.min.js',
        
        'resources/plantilla/vendor/datatables/jquery.dataTables.js',
        'resources/plantilla/vendor/datatables/dataTables.bootstrap4.js',

        'resources/plantilla/js/sb-admin-2.min.js',
        'resources/plantilla/js/sb-admin-2.js',
       'resources/plantilla/js/demo/datatables-demo.js'
        
    ], 'public/js/plantilla.js')
    .js(['resources/js/app.js'],'public/js/app.js');
