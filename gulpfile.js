const { src, dest, watch, series, parallel } = require("gulp");
const scss = require("gulp-sass");
const autoprefixer = require("gulp-autoprefixer");
const cleanCSS = require("gulp-clean-css");
const rename = require("gulp-rename");
const terser = require("gulp-terser");
const concat = require("gulp-concat");
const imagemin = require("gulp-imagemin");
const del = require("del");
const browserSync = require("browser-sync").create();

const paths = {
  clean: {
    src: "./dist"
  },
  styles: {
    src: "./src/scss/**/*.scss",
    dest: "./dist/css"
  },
  scripts: {
    src: ["./src/js/vendor/*.js", "./src/js/**/*.js"],
    dest: "./dist/js"
  },
  images: {
    src: "./src/img/**",
    dest: "./dist/img"
  },
  fonts: {
    src: "./src/fonts/**",
    dest: "./dist/fonts"
  }
};

function cleanDist(cb) {
  del.sync(paths.clean.src);

  cb();
}

function styles(cb) {
  src(paths.styles.src)
    .pipe(
      scss({
        outputStyle: "expand"
      }).on("error", scss.logError)
    )
    .pipe(
      autoprefixer({
        grid: true
      })
    )
    .pipe(cleanCSS())
    .pipe(rename({ suffix: ".min" }))
    .pipe(dest(paths.styles.dest));

  browserSync.reload();

  cb();
}

function scripts(cb) {
  src(paths.scripts.src)
    .pipe(terser())
    .pipe(concat("./main.js", { newLine: ";" }))
    .pipe(rename({ suffix: ".min" }))
    .pipe(dest(paths.scripts.dest));

  browserSync.reload();

  cb();
}

function images(cb) {
  src(paths.images.src)
    .pipe(
      imagemin([
        imagemin.gifsicle({ interlaced: true }),
        imagemin.jpegtran({ progressive: true }),
        imagemin.optipng({ optimizationLevel: 5 })
      ])
    )
    .pipe(dest(paths.images.dest));

  cb();
}

function fonts(cb) {
  src(paths.fonts.src).pipe(dest(paths.fonts.dest));

  cb();
}

function sync(cb) {
  browserSync.init({
    proxy: "localhost:8080/page/",
    port: 8081
  });

  cb();
}

function watchFiles(cb) {
  watch(paths.styles.src, series(styles));
  watch(paths.scripts.src, series(scripts));
  watch(paths.images.src, series(images));

  cb();
}

const dist = series(
  cleanDist,
  sync,
  parallel(styles, scripts, images, fonts, watchFiles)
);

exports.styles = styles;
exports.scripts = scripts;
exports.images = images;
exports.fonts = fonts;
exports.watchFiles = watch;
exports.cleanDist = cleanDist;
exports.sync = sync;
exports.default = dist;
