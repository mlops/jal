var elixir = require('laravel-elixir');
             require('laravel-elixir-browser-sync');

var paths = {
    'jquery': './vendor/bower_components/jquery/',
    'bourbon': './vendor/bower_components/bourbon/',
    'neat': './vendor/bower_components/neat/',
    'susy': './vendor/bower_components/susy/',
    'bootstrap': './vendor/bower_components/bootstrap-sass-official/',
    'fontawesome': './vendor/bower_components/fontawesome/',
    'compass': './vendor/bower_components/compass-normalize/stylesheets/'
}



elixir(function(mix) {

//   elixir(function(mix) {
//   mix.sass('styles.sass', false, { indentedSyntax: true });
// });
// dirSass + '/**/*.{scss,sass}'
    // mix.sass(["app.sass","todo.sass"], 'public/css/')
     mix.sass('app.sass', false, { indentedSyntax: true })
        // .copy(paths.jquery + 'dist/jquery.min.js', 'public/js/jquery.min.js');
           .copy(
            paths.jquery + 'dist/jquery.min.js', 'public/js/jquery.min.js'
       )
           .copy(
            paths.jquery + 'dist/jquery.min.map', 'public/js/jquery.min.map'
       )
            .copy('resources/assets/fonts', 'public/fonts'
        )

          .copy(
              paths.bourbon + 'dist', 
             'resources/assets/sass/vendor/bourbon'
         )
          .copy(
              paths.neat + 'app/assets/stylesheets/', 
             'resources/assets/sass/vendor/bourbon/neat'
         )

          .copy(
              paths.susy + 'sass', 
             'resources/assets/sass/vendor/susy'
         )
          .copy(
              paths.bootstrap + 'assets', 
             'resources/assets/sass/vendor/bootstrap'
         )
          .copy(
              paths.fontawesome, 
             'resources/assets/sass/vendor/fontawesome'
         )
         .copy(
             paths.compass, 
            'resources/assets/sass/vendor/compass-normalize'
        );


  mix.browserSync([
    'app/**/*',
    'public/**/*',
    'resources/views/**/*'
  ], {
    proxy: 'jal.dev:8000',
    reloadDelay: 2000
  });
});


