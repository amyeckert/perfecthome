var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    sourcemaps = require('gulp-sourcemaps'),
    cleanCSS = require('gulp-clean-css'),
    notify = require('gulp-notify'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    livereload = require('gulp-livereload');


gulp.task('styles', function () {
    return gulp.src('./scss/styles.scss')
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: true
        }))
        // .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
        .pipe(gulp.dest('./css'))
        .pipe(minifycss())
        .pipe(rename('style.min.css'))
        .pipe(gulp.dest('./css'))
        .pipe(notify("SCSS compiled!"));
});

// gulp.task('js', function () {

//     gulp.src('./js/vendor/plugins/*.js')
//         .pipe(plumber())
//         .pipe(concat('plugins.min.js'))
//         //.pipe(uglify())
//         .pipe(gulp.dest('./js/vendor'))
//         .pipe(notify({message: 'Plugins Compiled and Minified!'}));


//     gulp.src('./js/script.js')
//         .pipe(plumber())
//         .pipe(uglify())
//         .pipe(rename({suffix: '-min'}))
//         .pipe(gulp.dest('js/min'))
//         .pipe(notify({message: 'JS Compiled!'}))
//         .pipe(livereload());
// });

gulp.task('watch', function () {
    // livereload.listen();
    gulp.watch('./scss/partials/*.scss', ['styles']);
    gulp.watch('./scss/vendor/*.scss', ['styles']);
    // gulp.watch('./js/vendor/plugins/*.js', ['js']);
    // gulp.watch('./js/vendor/plugins/**/*.js', ['js']);
    // gulp.watch('./js/script.js', ['js']);
});

gulp.task('default', function() {
  gulp.start('watch','styles');
});
