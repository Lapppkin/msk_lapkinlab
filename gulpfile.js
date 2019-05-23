'use strict';

const gulp       = require('gulp'),
      sass       = require('gulp-sass'),
      csso       = require('gulp-csso'),
      sourcemaps = require('gulp-sourcemaps');

gulp.task('scss', () => {
    return gulp.src('novosti/*.scss', {dot: true})
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(csso({restructure: false}))
        .pipe(sourcemaps.write('.', {sourceRoot: '/'}))
        .pipe(gulp.dest('novosti')),
        gulp.src('amocrm/*.scss', {dot: true})
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(csso({restructure: false}))
        .pipe(sourcemaps.write('.', {sourceRoot: '/'}))
        .pipe(gulp.dest('amocrm')),
        gulp.src('amocrm/css/*.scss', {dot: true})
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(csso({restructure: false}))
        .pipe(sourcemaps.write('.', {sourceRoot: '/'}))
        .pipe(gulp.dest('amocrm'));
});

gulp.task('scss:watch', gulp.series('scss', () => {
    gulp.watch([
        'novosti/*.scss',
        'amocrm/*.scss',
        'amocrm/css/*.scss',
    ], gulp.series('scss'));
}));

gulp.task('default', gulp.series('scss:watch'));
