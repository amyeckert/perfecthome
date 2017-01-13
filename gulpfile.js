var gulp = require('gulp'),
 sass = require('gulp-sass'),
 sass = require('gulp-ruby-sass'),
 autoprefixer = require('gulp-autoprefixer'),
 minifycss = require('gulp-minify-css'),
 cleanCSS = require('gulp-clean-css'),
 notify = require('gulp-notify'),
 rename = require('gulp-rename'),
 concat = require('gulp-concat'),
 uglify = require('gulp-uglify');
 plumber = require('gulp-plumber'),
 htmlmin = require('gulp-htmlmin'),
 browserify = require('browserify');

var paths = {
    styles: ['./scss/style.scss', './scss/ie.scss']
}
gulp.task('styles', function() {
    return sass('scss/style.scss', { style: 'expanded' })
        .pipe(gulp.dest('css'))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
        .pipe(rename('style.min.css'))
        .pipe(minifycss())
        .pipe(gulp.dest('css'))
        .pipe(notify("Compiled!"));
});

// gulp.task('ie-9-styles', function() {
//   return sass('scss/partials/ie/ie9.scss', { style: 'expanded' })
//       .pipe(gulp.dest('css/ie'))
//       .pipe(rename('ie9.min.css'))
//       .pipe(minifycss())
//       .pipe(gulp.dest('css/ie'))
// });

// gulp.task('ie-8-styles', function() {
//   return sass('scss/partials/ie/ie8.scss', { style: 'expanded' })
//       .pipe(gulp.dest('css/ie'))
//       .pipe(rename('ie8.min.css'))
//       .pipe(minifycss())
//       .pipe(gulp.dest('css/ie'))
// });

gulp.task('no-js-styles', function() {
  return sass('scss/partials/no-js.scss', { style: 'expanded' })
      .pipe(gulp.dest('css'))
      .pipe(rename('no-js.min.css'))
      .pipe(minifycss())
      .pipe(gulp.dest('css'))
});
gulp.task('css', function () {
    gulp.src(paths.styles)
        .pipe(plumber())
        .pipe(sass())
        .pipe(minifycss())
        .pipe(autoprefixer({ browsers: ['last 3 versions'] }))
        .pipe(gulp.dest('css'))
        .pipe(notify({message: 'SASS-iness Compiled!'}));
});

// gulp.task('js', function ()
// {

//     gulp.src('./js/vendor/plugins/*.js')
//         .pipe(plumber())
//         .pipe(concat('plugins.min.js'))
//         //.pipe(uglify())
//         .pipe(gulp.dest('./js/vendor'))
//         .pipe(notify({message: 'Plugins Compiled and Minified!'}));

//     gulp.src('./js/functionality.js')
//         .pipe(plumber())
//         .pipe(uglify())
//         .pipe(rename({suffix: '.min'}))
//         .pipe(gulp.dest('js'))
//         .pipe(notify({message: 'JS Compiled!'}));
// });

// gulp.task('watch', function ()
// {
//     gulp.watch('./scss/*.scss');
//     gulp.watch('./scss/**/*.scss');
    // gulp.watch('./js/vendor/plugins/*.js', ['js']);
    // gulp.watch('./js/functionality.js', ['js']);
// });

// gulp.task('default', ['watch']);

gulp.task('watch', function() {
  gulp.watch('scss/partials/ie/*.scss', ['ie-8-styles','ie-9-styles']);
  gulp.watch('scss/partials/*.scss', ['styles','ie-8-styles','ie-9-styles']);
  gulp.watch('scss/vendor/*.scss', ['styles']);
  gulp.watch('scss/partials/no-js.scss', ['no-js-styles']);
  // gulp.watch( contactJsSrc + '*.js', ['contact-scripts']);
  // gulp.watch( contactJsSrc + 'components/*.js', ['contact-scripts']);
});

gulp.task('default', function() {
  gulp.start('watch','styles','no-js-styles'); //'ie-8-styles','ie-9-styles'
});