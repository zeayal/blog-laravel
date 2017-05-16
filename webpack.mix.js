const { mix } = require('laravel-mix');

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


mix.sass('resources/assets/sass/blog.custom.scss', 'public/css');
mix.sass('resources/assets/sass/blog-auth.scss', 'public/css');

mix.sass('vendor/bower_components/font-awesome/scss/font-awesome.scss', 'public/assets/app/css/app.css');

mix.styles([
    'vendor/bower_components/gentelella/vendors/bootstrap/dist/css/bootstrap.css',
    'vendor/bower_components/gentelella/vendors/animate.css/animate.css',
    'vendor/bower_components/gentelella/build/css/custom.css',
], 'public/assets/admin/css/admin.css');

mix.scripts([
    'vendor/bower_components/gentelella/build/js/custom.js'
    ], 'public/assets/admin/js/admin.js');

mix.copy('vendor/bower_components/gentelella/vendors/bootstrap/fonts', 'public/assets/admin/fonts');
mix.copy('vendor/bower_components/gentelella/production/images', 'public/assets/admin/images');
mix.copy('vendor/bower_components/gentelella/vendors', 'public/assets/admin/vendors');
if (mix.config.inProduction) {
    mix.version();
}

mix.browserSync('ocliuziyang.dev');
