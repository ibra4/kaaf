var gulp = require("gulp");
var rtlcss = require("gulp-rtlcss");
const sass = require("gulp-sass")(require("sass"));
var rename = require("gulp-rename");

gulp.task("build-sass", () => {
  return gulp
    .src("./assets/sass/main.scss")
    .pipe(rename("style.css"))
    .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
    .pipe(gulp.dest("./css"));
});

gulp.task("rtl", function () {
  return gulp
    .src("./assets/css/style.css")
    .pipe(rename("style-rtl.css"))
    .pipe(rtlcss())
    .pipe(gulp.dest("./css"));
});

gulp.task("watch", () => {
  gulp.watch("assets/sass/*.scss", (done) => {
    gulp.series(["build-sass", "rtl"])(done);
  });
});
