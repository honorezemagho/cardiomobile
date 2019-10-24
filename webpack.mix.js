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


mix.scripts([
    'public/dentalpro/js/jquery-2.2.4.min.js',
    'public/dentalpro/js/jquery-ui.min.js',
    'public/dentalpro/js/bootstrap.min.js',
    'public/js/jquery.bootstrap.wizard.js',
    'public/js/jquery-steps.min.js',
    'public/dentalpro/js/jquery-plugin-collection.js',
    'public/wizard/js/jquery.mCustomScrollbar.concat.min.js',
], 'public/js/all.js');


mix.styles([
    'public/dentalpro/css/bootstrap.min.css',
    'public/dentalpro/css/jquery-ui.min.css',
    'public/dentalpro/css/animate.css',
    'public/dentalpro/css/css-plugin-collections.css',
    'public/dentalpro/css/menuzord-skins/menuzord-border-boxed.css',
    'public/dentalpro/css/custom-bootstrap-margin-padding.css',
    'public/dentalpro/css/responsive.css',
    'public/dentalpro/css/colors/theme-skin-color-set1.css',
    'public/datepicker/css/tail.datetime-default-blue.css',
    'public/wizard/css/step-form-wizard-all.css',
    'public/wizard/css/jquery.mCustomScrollbar.min.css',
    'public/dentalpro/css/menuzord-skins/menuzord-gradient.css',
    'public/dentalpro/css/style-main.css',
], 'public/css/all.css');

mix.styles([
    'public/vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css',
    'public/vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css',
    'public/vendor/adminlte/vendor/Ionicons/css/ionicons.min.css',
    'public/vendor/adminlte/dist/css/AdminLTE.min.css',
], 'public/css/adminte.css');


mix.scripts([
    'public/vendor/adminlte/vendor/jquery/dist/jquery.min.js',
    'public/vendor/adminlte/vendor/jquery/dist/jquery.slimscroll.min.js',
    'public/vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js',
    'public/vendor/adminlte/dist/js/adminlte.min.js',
], 'public/js/adminlte.js');
