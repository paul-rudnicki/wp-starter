var gulp = require("gulp"),
    sass = require("gulp-sass"),
    autoprefixer = require("gulp-autoprefixer"),
    plumber = require("gulp-plumber"),
    useref = require("gulp-useref"),
    concat = require('gulp-concat'),
    uglify = require("gulp-uglify"),
    runSequence = require("run-sequence")
    ftp = require('vinyl-ftp')

gulp.task('upload', function(){
    var conn = ftp.create({
        host: "serwer2008652.home.pl",
        user: "paul@dev-solutions.online",
        password: "eIh1NYx5"
    })

    return gulp.src("../starter/**/*")
                .pipe(conn.dest("/starter/wp-content/themes/starter/"))
})

gulp.task("css", function(){
    return gulp.src("../starter/sass/main.sass")
        .pipe(plumber())
        .pipe(sass.sync({
            outputStyle: "compressed"
        }))
        .pipe(autoprefixer({
            browsers: ["last 5 version", "IE 10"]
        }))
        .pipe(gulp.dest("../starter/dist/css/"))
})

gulp.task('concatFrontJs', function() {
  return gulp.src('../starter/js/front/**/*.js')
    .pipe(concat('front.js'))
    .pipe(uglify())
    .pipe(gulp.dest('../starter/dist/js/front/'));
});

gulp.task('concatAdminJs', function() {
  return gulp.src('../starter/js/admin/**/*.js')
    .pipe(concat('admin.js'))
    .pipe(uglify())
    .pipe(gulp.dest('../starter/dist/js/admin/'));
});

gulp.task("watch", function(){

    gulp.watch("../starter/sass/**/*.sass", ["css"]) 
    gulp.watch(["../starter/js/admin/**/*.js"], ["concatAdminJs"])
    gulp.watch(["../starter/js/front/**/*.js"], ["concatFrontJs"])
})

gulp.task("build", function(){
    runSequence("css", "concatAdminJs", "concatFrontJs", "upload") 
})

gulp.task("default", ["css", "concatAdminJs", "concatFrontJs", "watch"])