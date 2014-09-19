var gulp = require('gulp');
var concat = require('gulp-concat');
var less = require('gulp-less');
var minify = require('gulp-minify-css');
var uglify = require('gulp-uglify');

var less_paths = [
    'less/site.less'
];

var js_paths = [
    'js/jquery-1.11.1.min.js',
    'js/bootstrap/transition.js',
    'js/bootstrap/button.js',
    'js/bootstrap/tooltip.js',
    'js/bootstrap/popover.js',
    'js/bootstrap/dropdown.js',
    'js/bootstrap/modal.js',
    'js/bootstrap/scrollspy.js',
    'js/bootstrap/affix.js',
    'js/bootstrap/alert.js',
    'js/bootstrap/carousel.js',
    'js/bootstrap/collapse.js',
    'js/bootstrap/tab.js',
    'js/app.js'
];

gulp.task('build-less', function() {
    return gulp.src(less_paths)
        .pipe(less())
        .pipe(minify())
        .pipe(gulp.dest('css/'));
});

gulp.task('build-js', function() {
    return gulp.src(js_paths)
        .pipe(concat('site.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js'));
});

gulp.task('dev', ['build-less', 'build-js'], function() {
   var less_watcher = gulp.watch([
       'less/font-awesome/*.less',
       'less/bootstrap/*.less',
       'less/*.less'
   ], ['build-less']);

   var js_watcher = gulp.watch([
        'js/app.js'
   ], ['build-js']);

   less_watcher.on('change', function(e) {
       console.log('File ' + e.path + ' was ' + e.type + ', running tasks ...');
   });

   js_watcher.on('change', function(e) {
       console.log('File ' + e.path + ' was ' + e.type + ', running tasks ...');
   });
});

gulp.task('build', ['build-less', 'build-js']);