const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');

gulp.task('styles', () => {
  return gulp
    .src('assets/css/styles.css')
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(cleanCSS())
    .pipe(gulp.dest('assets/build'));
});

gulp.task('scripts', () => {
  return gulp
    .src('assets/js/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('assets/build'));
});

gulp.task('default', gulp.series('styles', 'scripts'));
