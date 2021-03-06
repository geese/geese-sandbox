// following guide at https://www.sitepoint.com/wordpress-theme-automation-with-gulp/



var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();


var input = './sass/**/*.scss';
var output = './';

var sassOptions = {
    errLogToConsole: true,
    outputStyle: 'expanded'
};

gulp.task('sass', function () {
  return gulp
    // Find all `.scss` files from the `stylesheets/` folder
    .src(input)
    .pipe(sourcemaps.init())
    // Run Sass on those files
    .pipe(sass(sassOptions).on('error', sass.logError))
    .pipe(sourcemaps.write('./stylesheets/maps'))
    // Write the resulting CSS in the output folder
    .pipe(gulp.dest(output))
//    .pipe(browserSync.reload({
//        stream: true
//        }))
    ;
});



//hmm...not the right way for live reload? it looks for index.html not index.php
//gulp.task('browserSync', function(){
//    browserSync.init({
//        server: {
//            proxy: 'geese.dev',
//            baseDir: 'geese',
//            index: 'index.php'
//        }
//    })    
//})


gulp.task('watch', /*['browserSync', 'sass']*/, function() {
    
  return gulp
    // Watch the input folder for change,
    // and run `sass` task when something happens
    .watch(input, ['sass'])
    // When there is a change,
    // log a message in the console
    .on('change', function(event) {
      console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
    });
});

gulp.task('default', ['sass','watch']);











//********************************  this section exists for https://www.sitepoint.com/wordpress-theme-automation-with-gulp/  *****************************

//require('es6-promise').polyfill();
//
//
//var autoprefixer = require('gulp-autoprefixer');
//var plumber = require('gulp-plumber');
//var gutil = require('gulp-util');
//var concat = require('gulp-concat');
//var jshint = require('gulp-jshint');
//var uglify = require('gulp-uglify');
//var rename = require('gulp-rename');
//
//
//// know there's an error, know in which file, prevent Gulp from stopping
//var onError = function(err){
//	console.log('An error occurred: ', gutil.colors.magenta(err.message));
//	gutil.beep();
//	this.emit('end');
//};
//
//
//gulp.task('sass', function(){
//	return gulp.src('./sass/**/*.scss')
//	.pipe(plumber({ errorHandler: onError }))
//	// online guide comments out the rest of this?  or just skips it to save space?
//	.pipe(sass())
//	.pipe(autoprefixer())
//	.pipe(gulp.dest('./'))
//});
//
//
//gulp.task('watch', function(){
//	gulp.watch('./sass/**/*.scss',['sass']);
//});
//
//
//gulp.task('js', function() {
//  return gulp.src(['./js/*.js'])
//    .pipe(jshint())
//    .pipe(jshint.reporter('default'))
//    //.pipe(concat('app.js'))
//    // .pipe(rename({suffix: '.min'})) //no prob
//    // .pipe(uglify())//no prob
//    // .pipe(gulp.dest('./js'))//no prob
//});
//
//// default task
////gulp.task('default');
//
//// another way to run sass task:
////gulp.task('default', ['sass']);
//
//// run sass and watch tasks
//gulp.task('default', ['sass', 'watch']);




//*********************************  end of section following https://www.sitepoint.com/wordpress-theme-automation-with-gulp/ ************************************




// Following guide at https://www.sitepoint.com/fast-gulp-wordpress-theme-development-workflow/

// // Gulp.js configuration
// 'use strict';



//   // source and build folders
//  const dir = {
//     src         : 'src/',
//     build       : '/var/www/wp-content/themes/mytheme/'
//   },

//   // Gulp and plugins
//   gulp          = require('gulp'),
//   gutil         = require('gulp-util'),
//   newer         = require('gulp-newer'),
//   imagemin      = require('gulp-imagemin'),
//   sass          = require('gulp-sass'),
//   postcss       = require('gulp-postcss'),
//   deporder      = require('gulp-deporder'),
//   concat        = require('gulp-concat'),
//   stripdebug    = require('gulp-strip-debug'),
//   uglify        = require('gulp-uglify')
// ;

// // Browser-sync
// var browsersync = false;


// // PHP settings
// const php = {
//   src           : dir.src + 'template/**/*.php',
//   build         : dir.build
// };

// // copy PHP files
// gulp.task('php', () => {
//   return gulp.src(php.src)
//     .pipe(newer(php.build))
//     .pipe(gulp.dest(php.build));
// });