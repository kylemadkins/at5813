let mix = require('laravel-mix');

mix.options({
    processCssUrls: false
});

mix
    .js('assets/js/main.js', 'assets/js-dist')
    .sass('assets/scss/styles.scss', 'assets/css');
