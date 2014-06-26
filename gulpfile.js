var gulp = require('gulp')
  , stylus = require('gulp-stylus')
  , livereload = require('gulp-livereload')
  , notify = require('gulp-notify')
  , nib = require('nib');

gulp.task('stylus', function () {
  return gulp.src('src/stylus/zachetka.styl')
    .pipe(stylus({
      use: [nib()],
      errors: true
    }))
    .pipe(gulp.dest('public/css/'))
    .pipe(notify({ message: 'Styles are compiled' }));
});

gulp.task('default', function () {
  var server = livereload();

  gulp.watch('src/stylus/**/*.styl', ['stylus']);

  gulp.watch(['public/**']).on('change', function (file) {
    server.changed(file.path);
  });
});
