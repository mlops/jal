var gulp   = require('gulp'),
    gutil      = require('gulp-util'),
    browserify = require('gulp-browserify'),
    compass    = require('gulp-compass'),
    gulpif     = require('gulp-if'),
    uglify     = require('gulp-uglify'),
    minifyHTML = require('gulp-minify-html'),
    concat     = require('gulp-concat'),
    browserSync  = require('browser-sync'),
    reload       = browserSync.reload;

var env,
    jsSources,
    sassSources,
    htmlSources,
    outputDir,
    sassStyle;
    outputDir;


env = 'development';

if (env==='development') {
  outputDir = 'public/development/';
  sassStyle = 'expanded';
} else {
  outputDir = 'public/production/';
  sassStyle = 'compressed';
}

jsSources = [
  'resources/assets/js/jqloader.js',
  'resources/assets/js/TweenMax.min.js',
  'resources/assets/js/jquery.scrollmagic.min.js',
  'resources/assets/js/source/jquery.fancybox.pack.js',
  'resources/assets/js/source/helpers/jquery.fancybox-buttons.js',
  'resources/assets/js/source/helpers/jquery.fancybox-media.js',
  'resources/assets/js/source/helpers/jquery.fancybox-thumbs.js',
  'resources/assets/js/script.js',
];
// sassSources = ['components/sass/style.scss']*.{scss,sass};
sassSources = ['resources/assets/sass/*.{scss,sass}'];
htmlSources = ['public/*.php'];


gulp.task('compass', function() {
  gulp.src(sassSources)
    .pipe(compass({
      sass: 'resources/assets/sass',
      css: outputDir + 'css',
      image: outputDir + 'images',
      style: sassStyle,
      require: ['susy', 'breakpoint', 'sassy-buttons']
    })
    .on('error', gutil.log))
   .pipe(gulp.dest( outputDir + 'css'))
    //.pipe(connect.reload())
    // .pipe(reload({stream: true}))
});

gulp.task('js', function() {
  gulp.src(jsSources)
    .pipe(concat('script.js'))
    .pipe(browserify())
    .on('error', gutil.log)
    .pipe(gulpif(env === 'production', uglify()))
    .pipe(gulp.dest(outputDir + 'js'))
    // .pipe(reload({stream: true}))
});

gulp.task('watch', function() {
  gulp.watch(['resources/assets/sass/*.{scss,sass}', 'resources/assets/sass/*/*.{scss,sass}'], ['compass']);
  gulp.watch(outputDir + "/*.css");

  gulp.watch(jsSources, ['js'])
  gulp.watch("public/js/*.js");

  gulp.watch(htmlSources, ['compass'])
  gulp.watch(htmlSources);
});

// gulp.task('connect', function() {
//   connect.server({
//     root: outputDir,
//     livereload: true
//   });
// });


// Copy images to production
gulp.task('move', function() {
  gulp.src('public/development/images/**/*.*')
  .pipe(gulpif(env === 'production', gulp.dest(outputDir+'images')))
});



gulp.task('default', ['watch', 'js', 'compass', 'move'], browserSync.reload);


browserSync([
    'app/**/*',
    'public/**/*',
    'resources/views/**/*'
  ], {
    proxy: 'jal.dev:8000',
    reloadDelay: 1000,
    browser: ["google chrome", "firefox"]
  });