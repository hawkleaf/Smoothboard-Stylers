var elixir = require('laravel-elixir');

require('laravel-elixir-stylus');

elixir(function(mix) {
    mix.stylus('collection.styl');
	mix.styles(['vendor/normalize.css', 'collection.css'], null, 'public/css');
	mix.version('public/css/all.css');
});
