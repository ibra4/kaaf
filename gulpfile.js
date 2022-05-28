var gulp = require("gulp");
var rtlcss = require("gulp-rtlcss");
const sass = require("gulp-sass")(require("sass"));
var rename = require("gulp-rename");
const livereload = require("gulp-livereload");

gulp.task("build-sass", () => {
  return gulp
    .src("assets/sass/main.scss")
    .pipe(rename("style.css"))
    .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
    .pipe(gulp.dest("assets/css"))
    .pipe(livereload());
});

gulp.task("rtl", function () {
  return gulp
    .src("assets/css/style.css")
    .pipe(rename("style-rtl.css"))
    .pipe(rtlcss())
    .pipe(gulp.dest("assets/css"));
});

gulp.task("watch", () => {
  livereload.listen();
  gulp.watch("assets/sass/*.scss", (done) => {
    gulp.series(["build-sass", "rtl"])(done);
  });
});
