let mix = require('laravel-mix');

// mimic build logic as is generated when you do nova:field
// because otherwise you get this issue:
// https://github.com/JeffreyWay/laravel-mix/issues/1126#issuecomment-325581328
mix.setPublicPath('dist').js('resources/js/field.js', 'js').webpackConfig({
    resolve: {
        symlinks: false
    }
});