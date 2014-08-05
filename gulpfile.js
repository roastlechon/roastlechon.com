var gulp = require('gulp');
var bump = require('gulp-bump');
var bower = require('gulp-bower');
var browserify  = require('gulp-browserify');
var replace = require('gulp-replace');
var spawn = require('child_process').spawn;
var es = require('event-stream');
var sass = require('gulp-ruby-sass');
var clean = require('gulp-clean');
var gutil = require('gulp-util');

var paths = {
  src: ['src/client/**/*']
}

var changeEvent = function(evt) {
  gutil.log('File', gutil.colors.cyan(evt.path.replace(new RegExp('/.*(?=/src/client/)/'), '')), 'was', gutil.colors.magenta(evt.type));
};

// Clean
gulp.task('clean', function() {
  return es.concat(
    gulp.src('dist', {
      read: false
    }).pipe(clean())
  );
});

// Copy
gulp.task('copy', ['clean'], function () {
  return es.concat(
    // update index.html to work when built
    gulp.src(['src/client/index.html'])
      .pipe(gulp.dest('dist/public')),
    // copy assets
    gulp.src(['src/assets/**/*'])
      .pipe(gulp.dest('dist/public'))
  );
});

// Sass
gulp.task('sass', ['copy'], function() {
  return gulp.src(['src/sass/styles.scss'])
    .pipe(sass({
      style: 'compressed'
    }).on('error', function(err) {
      new gutil.PluginError('CSS', err, {
        showStack: true
      });
    }))
    .pipe(gulp.dest('dist/public/css'));
});

// Scripts
gulp.task('scripts', ['copy'], function() {
  return gulp.src('src/client/app.js')
    .pipe(browserify({
      transform: ['debowerify'],
      insertGlobals: true,
      debug: true,
      shim: {
        jquery: {
          path: "src/vendor/jquery/dist/jquery.js",
          exports: "$"
        },
        angular: {
          path: "src/vendor/angular/angular.js",
          exports: "angular",
          depends: {
            jquery: "$"
          }

        }
      }
    }))
    .pipe(gulp.dest('dist/public/js'));
});

// Update bower, component, npm at once:
gulp.task('bump', function() {
  return gulp.src(['./bower.json', './package.json'])
    .pipe(bump())
    .pipe(gulp.dest('./'));
});

// Watch files and rerun stuff
gulp.task('watch', ['scripts'], function() {
  gulp.watch(paths.src, ['scripts']).on('change', function(e) {
    changeEvent(e);
  });
});

// Default
gulp.task('default', ['scripts']);