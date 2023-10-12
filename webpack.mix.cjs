const mix = require('laravel-mix');

mix.js('resources/js/*', 'public/js')
   .css('resources/css/*', 'public/css')
   .setResourceRoot('/public/')
   .setPublicPath('public');
