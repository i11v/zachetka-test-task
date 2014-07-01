var gulp = require('gulp')
  , stylus = require('gulp-stylus')
  , nib = require('nib')
  , csso = require('gulp-csso')
  , browserify = require('gulp-browserify')
  , uglify = require('gulp-uglify')
  , livereload = require('gulp-livereload')
  , notify = require('gulp-notify');

gulp.task('stylus', function () {
  return gulp.src('src/stylus/zachetka.styl')
    .pipe(stylus({
      use: [nib()],
      errors: true
    }))
    .pipe(gulp.dest('public/css/'))
    .pipe(notify({ message: 'Styles are compiled' }));
});

gulp.task('js', function () {
  return gulp.src('src/js/app.js')
    .pipe(browserify({
      insertGlobals: true,
      debug: true
    }))
    .pipe(gulp.dest('public/js'));
});

gulp.task('default', function () {
  var server = livereload();

  gulp.start('stylus', 'js');

  gulp.watch('src/stylus/**/*.styl', ['stylus']);
  gulp.watch('src/js/**/*.js', ['js']);

  gulp.watch(['index.php', 'public/**']).on('change', function (file) {
    server.changed(file.path);
  });
});

gulp.task('build', function () {
  gulp.src('src/stylus/zachetka.styl')
    .pipe(stylus({
      use: [nib()]
    }))
    .pipe(csso())
    .pipe(gulp.dest('public/css/'))

  gulp.src('src/js/app.js')
    .pipe(browserify({
      insertGlobals: true
    }))
    .pipe(uglify())
    .pipe(gulp.dest('public/js'));
});
