const gulp = require('gulp');
// const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
const rename = require('gulp-rename');
const cleanCSS = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');
const plumber = require('gulp-plumber');

const srcFiles = './src/';

// Sass Source
const scssWebsiteFiles = `${srcFiles}scss/*.scss`;
const scssAppFiles = `${srcFiles}scss/app/*.scss`;
const scssAllFilesToWatch = [ scssWebsiteFiles, scssAppFiles ];
const cssDest = `${srcFiles}css`;
const cssDistDest = './dist/css';

const sassDevOptions = {
  style: 'compressed',
  outputStyle: 'compressed',
  errLogToConsole: true,
  sourceComments: 'normal'
}
const sassProdOptions = {
  outputStyle: 'compressed'
}

// Task 'SASS For Dev' - Run with command 'gulp sass-website-dev'
gulp.task('sass-website-dev', function() {
  console.log(">>> SASS -WEBSITE- DEV <<<");
  return gulp.src(scssWebsiteFiles)
    .pipe(sourcemaps.init())
    .pipe(plumber())
    .pipe(sass(sassDevOptions))
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(sourcemaps.write())
    .pipe(plumber.stop())
    .pipe(rename('main.min.css'))
    .pipe(gulp.dest(cssDest));
});

// Task Build Website CSS Distribution - Run with command 'gulp build-web-sass'
gulp.task('build-web-sass', function() {
  console.log(">>> SASS -WEBSITE- PROD <<<");
  return gulp.src(scssWebsiteFiles)
    .pipe(plumber())
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(sass(sassProdOptions))
    .pipe(plumber.stop())
    .pipe(rename('main.min.css'))
    .pipe(gulp.dest(cssDistDest));
});

// Task 'SASS For Dev' - Run with command 'gulp sass-app-dev'
gulp.task('sass-app-dev', function() {
  console.log(">>> SASS -APP- DEV <<<");
  return gulp.src(scssAppFiles)
    .pipe(sourcemaps.init())
    .pipe(plumber())
    .pipe(sass(sassDevOptions))
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(sourcemaps.write())
    .pipe(plumber.stop())
    .pipe(rename('app-main.min.css'))
    .pipe(gulp.dest(cssDest));
});

// Task Build App CSS Distribution - Run with command 'gulp build-app-sass'
gulp.task('build-app-sass', function() {
  console.log(">>> SASS -APP- PROD <<<");
  return gulp.src(scssAppFiles)
    .pipe(plumber())
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(sass(sassProdOptions))
    .pipe(plumber.stop())
    .pipe(rename('app-main.min.css'))
    .pipe(gulp.dest(cssDistDest));
});

// Task 'watch' - Run with command 'gulp watch'
gulp.task('watch-all', function() {
  gulp.watch(scssAllFilesToWatch, ['sass-website-dev', 'sass-app-dev']);
});
// Task 'watch' - Run with command 'gulp watch-app-dev'
gulp.task('watch-app-dev', function() {
  gulp.watch(scssAppFiles, ['sass-app-dev']);
});
// Task 'watch' - Run with command 'gulp watch-website-dev'
gulp.task('watch-website-dev', function() {
  gulp.watch(scssWebsiteFiles, ['sass-website-dev']);
});


// Default WEBSITE task - Run with command 'gulp'
gulp.task('web', ['sass-website-dev', 'watch-website-dev']);
// Default APP task - Run with command 'gulp'
gulp.task('app', ['sass-app-dev', 'watch-app-dev']);

// Default task - Run with command 'gulp'
gulp.task('default', ['sass-website-dev', 'sass-app-dev', 'watch-all']);
// BUILD Distribution task - Run with command 'gulp build-dist'
gulp.task('build-dist', ['build-web-sass', 'build-app-sass']);