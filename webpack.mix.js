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

mix.options({
  processCssUrls: false
});

mix.js('resources/assets/js/app.js', 'public/js').version()
  .sass('resources/assets/sass/app.scss', 'public/css').version()
    .copy('./node_modules/grapesjs', 'public/grapesjs', false)
//basic blocks
.copy('./node_modules/grapesjs-blocks-basic', 'public/grapesjs-blocks-basic', false)

//preset-webpage
.copy('./node_modules/grapesjs-blocks-flexbox', 'public/grapesjs-blocks-flexbox', false)

//flexbox
.copy('./node_modules/grapesjs-preset-webpage', 'public/grapesjs-preset-webpage', false)

//lory-slider
.copy('./node_modules/grapesjs-lory-slider', 'public/grapesjs-lory-slider', false)

//navbar
.copy('./node_modules/grapesjs-navbar', 'public/grapesjs-navbar',false)

//tabs
.copy('./node_modules/grapesjs-tabs/', 'public/grapesjs-tabs',false)

//bootstrap4 -OK
.copy('./node_modules/grapesjs-blocks-bootstrap4/', 'public/grapesjs-blocks-bootstrap4',false)


//aviary
.copy('./node_modules/grapesjs-aviary', 'public/grapesjs-aviary', false)

//toast
.copy('./node_modules/toastr', 'public/toastr', false);


  mix.autoload({
      jquery: ['$', 'window.jQuery', 'jQuery', 'jquery'],
      $: 'jquery'
  });
