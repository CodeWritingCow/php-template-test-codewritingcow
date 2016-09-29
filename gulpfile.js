var gulp = require('gulp'),
	connect = require('gulp-connect'),
	php = require('gulp-connect-php');

// task for starting website on local server. default port is 8080.
gulp.task('connect', function() {
	connect.server({
		port: 8888
	});
});

gulp.task('php', function() {
	php.server();
});

gulp.task('default', ['connect']);