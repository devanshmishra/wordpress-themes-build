// gulpfile.js

const gulp = require('gulp');

gulp.task('hello', function() {
    console.log('Hello from Gulp!');
});

gulp.task('watch', function() {
    gulp.watch('src/*.js', gulp.series('hello'));
});
