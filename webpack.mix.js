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

mix
  /*
   * This is concatenate some plain CSS stylesheets into a single file,
   * using the styles method.
   */
   .styles([
       'resources/assets/css/material-dashboard.min.css',
       'resources/assets/demo/demo.css',
   ], 'public/css/admin.css')
   /*
   * Combine and minify any number of JavaScript files
   * with the scripts() method:
   */
   .scripts([
       'resources/assets/js/core/jquery.min.js',
       'resources/assets/js/core/popper.min.js',
       'resources/assets/js/core/bootstrap-material-design.min.js',

       'resources/assets/js/plugins/perfect-scrollbar.jquery.min.js',
       'resources/assets/js/plugins/chartist.min.js',
       'resources/assets/js/plugins/bootstrap-notify.js',
       'resources/assets/js/plugins/sweetalert2.js',
       'resources/assets/js/plugins/jquery.bootstrap-wizard.js',
       'resources/assets/js/plugins/bootstrap-selectpicker.js',
       'resources/assets/js/plugins/jquery.dataTables.min.js',
       'resources/assets/js/plugins/bootstrap-tagsinput.js',
       'resources/assets/js/plugins/jasny-bootstrap.js',
       'resources/assets/js/plugins/jquery-jvectormap.js',
       'resources/assets/js/plugins/nouislider.min  .js',
       'resources/assets/js/plugins/arrive.js',

       'resources/assets/js/demo.js',
       'resources/assets/js/jquery.sharrre.js',
   ], 'public/js/admin.js')

/**
 * The version method will automatically append a unique hash to the filenames
 * of all compiled files, allowing for more convenient cache busting:
 */
if (mix.inProduction()) {
  mix.version();
}
