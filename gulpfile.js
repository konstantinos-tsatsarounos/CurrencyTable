
//get gulp
var gulp = require('gulp');


gulp.task('default', function () {
   gulp.src('node_modules/uikit/dist/**/*')
       .pipe( gulp.dest('libs/uikit'));

    gulp.src('node_modules/angular/angular.min.js')
        .pipe( gulp.dest('libs/angular'));

    gulp.src('node_modules/angular-resource/angular-resource.min.js')
        .pipe( gulp.dest('libs/angular'));

    gulp.src('node_modules/jquery/dist/jquery.min.js')
        .pipe( gulp.dest('libs'));
});
