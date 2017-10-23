var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('default', function() {
    // Copy SASS files to new location
    gulp.src([
        './node_modules/bootstrap-sass/assets/stylesheets/*',
        './node_modules/bootstrap-sass/assets/stylesheets/*/*',
        './node_modules/bootstrap-sass/assets/stylesheets/*/*/*'
    ]).pipe(gulp.dest('./assets/sass/bootstrap/'));

    // Font Awesome Fonts
    gulp.src('./node_modules/font-awesome/fonts/*')
    .pipe(gulp.dest('./css/font-awesome/fonts'));

    // Font Awesome CSS
    gulp.src('./node_modules/font-awesome/css/*')
    .pipe(gulp.dest('./css/font-awesome/css'));

    //jQuery
    gulp.src([
        './node_modules/jquery/dist/jquery.min.js',
        './assets/js/custom.js'
    ])
    .pipe(gulp.dest('./js'));

    // Convert SASS to CSS
	gulp.src('./assets/sass/custom.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'));
});