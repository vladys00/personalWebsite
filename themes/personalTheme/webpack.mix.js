let mix = require('laravel-mix');

mix
.autoload({
    jquery: ['$', 'window.jQuery']
  })
.setPublicPath('build')
.sass('src/sass/main.scss', 'css')