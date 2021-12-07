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
 module.exports = {
    mode:'production'
    }

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');

    // mix.override((webpackConfig) => {
    //     webpackConfig.resolve.modules = [
    //         "node_modules",
    //         __dirname + "/vendor/spatie/laravel-medialibrary-pro/resources/js",
    //     ];
    // });
    mix.webpackConfig({
        resolve: {
            modules: [
                "node_modules",
                __dirname + "/vendor/spatie/laravel-medialibrary-pro/resources/js",
            ],
        },
    });