const gulp = require( 'gulp' );
const sass = require( 'gulp-sass' );
const postcss = require( 'gulp-postcss' );

gulp.task( 'styles', function() {
    return gulp.src( './src/style.scss' )
               .pipe( sass() )
               .pipe( postcss() )
               .pipe( gulp.dest( './dist' ) );
} );

// Default task
gulp.task( 'default', gulp.series( 'styles' ) );
