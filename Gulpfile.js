var gulp = require('gulp');
var sass = require('gulp-sass');
var compass = require('gulp-compass');
var minifyCSS = require('gulp-minify-css');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
var uglify = require('gulp-uglify');
 

/* Sass */
gulp.task('styles', function() {
    gulp.src('scss/**/*.scss')
        .pipe(compass({
          css: 'css',
          sass: 'scss',
          image: 'images'
        }))
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'))
});


/* Minify */
gulp.task('minify', function () {
    gulp.src('css/**/*.css')
        .pipe(minifyCSS())
        .pipe(autoprefixer())
        .pipe(gulp.dest('./css'));
});

/* Image optim */
gulp.task('images', function() {
    gulp.src('images/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('./images'));
});

/* Compress js */
gulp.task('compress', function() {
  return gulp.src('library/js/**/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('./library/dist'));
});


/* Watch */
gulp.task('default',function() {
    gulp.watch('scss/**/*.scss',['styles']);
});