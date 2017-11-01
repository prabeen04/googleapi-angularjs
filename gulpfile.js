var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function () {

    browserSync.init({
        proxy: "http://localhost/angular1",
        files: ["*.php", "templates/*.php"]
    });

    gulp.watch("src/scss/*.scss", ['sass']).on('change', browserSync.reload);
    // gulp.watch("*.php").on('change', browserSync.reload);
    //gulp.watch("build/template/*.html").on('change', browserSync.reload);
});

//copy html fle to a build path
// gulp.task('copy', function() {
//     return gulp.src("src/*.html")      
//         .pipe(gulp.dest("build"));
// });

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function () {
    return gulp.src("src/scss/*.scss")
        .pipe(sass({ errLogToConsole: true }))
        .pipe(gulp.dest("style"))
        .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);