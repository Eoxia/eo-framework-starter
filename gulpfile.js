var gulp = require('gulp');
var please = require('gulp-pleeease');
var watch = require('gulp-watch');
var plumber = require('gulp-plumber');
var rename = require("gulp-rename");
var cssnano = require('gulp-cssnano');
var concat = require('gulp-concat');
var glob = require("glob");
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');

var paths = {
  all_js: ['core/asset/js/init.js', '**/*.backend.js'],
};

gulp.task('js', function() {
	return gulp.src(paths.all_js)
		.pipe(concat('backend.min.js'))
		.pipe(gulp.dest('core/asset/js/'))
})

gulp.task('default', function() {
	gulp.watch(paths.all_js, ["js"]);
});
