var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
var uglify = require('gulp-uglify');
var livereload = require('gulp-livereload');
var wpPot = require('gulp-wp-pot');
var sort = require('gulp-sort');
var duration = require('gulp-duration')
var plumber = require('gulp-plumber');
var eyeglass = require("eyeglass");


/*-------------------------------------------
 * Sass compilation
 * - compile Scss file to CSS
 * - Auto prefix CSS
 * - Reload browser (if live reload installed)
 -------------------------------------------*/
gulp.task('styles', function() {
    gulp.src('scss/**/*.scss')
        .pipe(plumber())
        .pipe(sass(eyeglass()))
        .pipe(autoprefixer())
        .pipe(gulp.dest('./'))
        .pipe(duration('Compiling scss'))
        .pipe(livereload());
});



/*-------------------------------------------
 * Minify CSS
 * - Launch the task before production
 -------------------------------------------*/
gulp.task('minify', function () {
    gulp.src('style.css')
        .pipe(cssnano())
        .pipe(gulp.dest('.'));
});



/*-------------------------------------------
 * Image optimisation
 * - Launch the task before production
 -------------------------------------------*/
gulp.task('images', function() {
    gulp.src('images/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('./images'));
});



/*-------------------------------------------
 * Minify Javascript
 * - Launch the task before production
 -------------------------------------------*/
gulp.task('compress', function() {
    gulp.src('js/src/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('js/dist/'));
});



/*-------------------------------------------
 * Make pot file
 * - Prepare the theme for i18n
 -------------------------------------------*/
gulp.task('pot', function () {
    return gulp.src('./**/*.php')
        .pipe(sort())
        .pipe(wpPot( {
            domain: 'mrpress',
            destFile:'mrpress.pot',
            package: 'mrpress',
            lastTranslator: 'John Doe <mail@example.com>',
            team: 'Team Team <mail@example.com>'
        } ))
        .pipe(gulp.dest('languages'));
});



/*-------------------------------------------
 * Default Watcher
 * - Launch the task before developing
 -------------------------------------------*/
gulp.task('default',function() {
    livereload.listen();
    gulp.watch('scss/**/*.scss',['styles']);
    gulp.watch('js/src/*.js',['compress']);
});
