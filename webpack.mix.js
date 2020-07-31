const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .sourceMaps()
    .postCss('source/_assets/css/main.css', 'css/main.css', [
        require('tailwindcss'),
    ])
    .copy('_redirects', 'build_production/_redirects')
    .version();
