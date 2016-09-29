var gulp = require('gulp'),
	connect = require('gulp-connect'),
	php = require('gulp-connect-php'),
	port = {port: 8888};

// task for starting website on local server. default port is 8080.
gulp.task('connect', function() {
	connect.server(port);
});

gulp.task('php', function() {
	php.server(port);
});

gulp.task('default', ['connect']);