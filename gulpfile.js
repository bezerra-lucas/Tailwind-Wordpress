var gulp = require("gulp");
var postcss = require("gulp-postcss");
var browserSync = require("browser-sync").create();
var autoprefixer = require("autoprefixer");
var cssnano = require("cssnano");
var tailwindcss = require("tailwindcss");
var rename = require("gulp-rename");
var exec = require("child_process").exec;

gulp.task("tailwind", function (cb) {
  exec(
    "npx tailwindcss -i tailwind.css -o style.css --watch",
    function (err, stdout, stderr) {
      console.log(stdout);
      console.log(stderr);
      cb(err);
    }
  );
});

gulp.task("css", function () {
  return gulp
    .src("./tailwind.css")
    .pipe(postcss([tailwindcss, autoprefixer, cssnano]))
    .pipe(rename("style.css"))
    .pipe(gulp.dest("./"))
    .pipe(browserSync.stream());
});

gulp.task("watch", function () {
  browserSync.init({
    proxy: "localhost/wordpress/",
  });

  gulp.watch("./tailwind.css", gulp.series("css"));
  gulp.watch("**/*.php").on("change", browserSync.reload);
});

gulp.task("default", gulp.parallel("css", "tailwind", "watch"));
