/*jshint esversion: 6 */
/* jshint node: true */

'use strict';

const gulp = require('gulp');
const kraken = require('gulp-kraken');
const sourcemaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const uglify = require('gulp-uglify');
const pump = require('pump');
const rename = require('gulp-rename');
const plumber = require('gulp-plumber');

const browserSync = require('browser-sync').create();


gulp.task('css', function() {
	var plugins = [
		autoprefixer({browsers: ['last 1 version']}),
		cssnano()
	];
	return gulp.src('css/*.min.css')
	 .pipe(concat('*.min.css'))
	.pipe(plumber())
	.pipe(sourcemaps.init())
	.pipe(rename('main.min.css'))
	.pipe(postcss(plugins))
	.pipe(sourcemaps.write())
	.pipe(plumber.stop())
	.pipe(gulp.dest('css'))
	.pipe(browserSync.stream());
});



// gulp.task('scripts', ['plugins'],  function() {
// 	gulp.src(['./js/plugins.js'])
// 	.pipe(plumber())
// 	.pipe(sourcemaps.init())
// 	/*.pipe(concat('all.js'))*/
// 	.pipe(closureCompiler({
// 		compilation_level: 'SIMPLE_OPTIMIZATIONS',
// 		js_output_file: 'main.min.js'
// 	}))
// 	/*.pipe(rename('main.min.js'))*/
// 	.pipe(sourcemaps.write())
// 	.pipe(plumber.stop())
// 	.pipe(gulp.dest('./js'))
// 	browserSync.reload();
// });


gulp.task('kraken', function () {
    gulp.src('img/**/*.{jpg,png,svg}')
		.pipe(plumber())
		.pipe(kraken({
			key: '06304f296cf4ea6454b060e73dc14b03',
			secret: '50bda3db4269dd9a85c98a32fa2e41f3bd3ed788',
			lossy: true,
			concurrency: 6
		}))
		.pipe(plumber.stop());
});


gulp.task('watch', function() {
	gulp.watch(["./views/**/*.twig", "./**/*.php"]).on('change', browserSync.reload);
	gulp.watch("css/*.css", ['css']);
});

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "http://localhost:8888/"
    });
});

gulp.task('default', ['css',  'watch', 'browser-sync']);
