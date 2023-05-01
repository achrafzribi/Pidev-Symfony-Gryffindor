var gulp = require('gulp');
var htmlreplace = require('gulp-html-replace');

gulp.task('assets', function() {
  return gulp.src('public/template/*.html')
    .pipe(htmlreplace({
      'css': ' {{ asset("template/css/styles.css") }}',
      'js': ' {{ asset("template/js/scripts.js") }}'
    }))
    .pipe(gulp.dest('public/template/'));
});
