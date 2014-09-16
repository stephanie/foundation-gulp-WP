var gulp = require('gulp');                       // Gulp!
var sass = require('gulp-sass');                  // Sass
var minifycss = require('gulp-minify-css');       // Minify CSS          
var uglify = require('gulp-uglify');              // Concat files
var concat = require('gulp-concat');              // Uglify javascript
var util = require('gulp-util');                  // Writing stuff
var livereload = require('gulp-livereload');      // LiveReload


var paths = {
  javascript: ['library/development/js/**/*.js', '!library/development/js/vendor/**/*.js'],
  theme: 'library/development/scss/theme.scss',
  watch: 'library/development/scss/**/*.scss'
}

gulp.task('scripts', function() {
  gulp.src(
    'bower_components/fastclick/lib/fastclick.js',      // Gets fastclick

    // Gets Foundation JS change to only include the scripts you'll need
    'bower_components/foundation/js/foundation/foundation.js',
    'bower_components/foundation/js/foundation/foundation.abide.js',
    'bower_components/foundation/js/foundation/foundation.accordion.js',
    'bower_components/foundation/js/foundation/foundation.alert.js',
    'bower_components/foundation/js/foundation/foundation.clearing.js',
    'bower_components/foundation/js/foundation/foundation.dropdown.js',
    'bower_components/foundation/js/foundation/foundation.equalizer.js',
    'bower_components/foundation/js/foundation/foundation.interchange.js',
    'bower_components/foundation/js/foundation/foundation.joyride.js',
    'bower_components/foundation/js/foundation/foundation.magellan.js',
    'bower_components/foundation/js/foundation/foundation.offcanvas.js',
    'bower_components/foundation/js/foundation/foundation.orbit.js',
    'bower_components/foundation/js/foundation/foundation.reveal.js',
    'bower_components/foundation/js/foundation/foundation.slider.js',
    'bower_components/foundation/js/foundation/foundation.tab.js',
    'bower_components/foundation/js/foundation/foundation.tooltip.js',
    'bower_components/foundation/js/foundation/foundation.topbar.js',
    paths.javascript)
    .pipe(uglify())
    .pipe(concat('theme-scripts.min.js'))
    .pipe(gulp.dest('./library/production/js'))
    .pipe(livereload());                                        // Reloads server
    util.log(util.colors.yellow('Javascripts compiled and minified'));    // Output to terminal
});


gulp.task('theme', function (){
  gulp.src([
    'bower_components/foundation/scss/normalize.scss',         // Gets normalize
    paths.theme])                                              // Gets the apps scss
    .pipe(sass({style: 'compressed', errLogToConsole: true}))  // Compile sass
    .pipe(concat('theme.css'))                             // Concat all css
    .pipe(gulp.dest('./library/production/css'))                            // Set the destination to assets/css
    .pipe(livereload());                                       // Reloads server
    util.log(util.colors.yellow('Sass compiled & minified'));  // Output to terminal
});


gulp.task('watch', function() {

  var server = livereload();
  gulp.watch('**/*.php').on('change', function(file) {
        server.changed(file.path);
        util.log(util.colors.yellow('PHP file changed' + ' (' + file.path + ')'));
    });

  gulp.watch("bower_components/foundation/scss/**/*.scss", ['theme']); // Runs sass on foundation components change
  gulp.watch(paths.watch, ['theme']);
  gulp.watch(paths.javascript, ['scripts']);

});

gulp.task('default', ['watch', 'theme', 'scripts'])