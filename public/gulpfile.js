/**
 * Created by Косаностра on 16.04.2016.
 */
var gulp = require('gulp'),
    livereload = require('gulp-livereload'),
    autopref = require('gulp-autoprefixer'),
    less = require('gulp-less'),
    watch = require('gulp-watch');

gulp.task('mincss', function() {
    gulp.src('./css/less/style.less')
        .pipe(less())
        .pipe(autopref('last 20 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1','chrome','ff'))
        .pipe(gulp.dest('./css/'))
        .pipe(livereload());
});
gulp.task('reload', function() {
    gulp.src('./index.html')
        .pipe(livereload());
});
gulp.task('watch',function(){
    livereload.listen();
    gulp.watch('./css/less/style.less', ['mincss']);
    gulp.watch('./css/less/include/*.less', ['mincss']);

});
gulp.task('default', ['mincss']);
