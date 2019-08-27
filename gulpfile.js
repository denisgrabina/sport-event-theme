const { src, dest, watch, series, parallel } = require('gulp');
const scss = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');
const terser = require('gulp-terser');
const concat = require('gulp-concat');
const imagemin = require('gulp-imagemin');
const clean = require('gulp-clean');
const paths = {
	clean: {
		src: './build'
	},
  styles: {
    src: './src/scss/**/*.scss',
    dest: './build/css'
  },
  scripts: {
    src: ['./src/js/vendor/*.js', './src/js/**/*.js'],
    dest: './build/js'
  },
  images: {
    src: './src/img/**',
    dest: './build/img'
  }
}

function cleanBuild(cb) {
	src(paths.clean.src)
		.pipe(clean())
	
	cb();
}

function styles(cb) {
  src(paths.styles.src)
    .pipe(scss({
			outputStyle: 'expand'
		}).on('error', scss.logError))
    .pipe(autoprefixer({
			grid: true
		}))
    .pipe(cleanCSS())
		.pipe(rename({ suffix: '.min' }))
    .pipe(dest(paths.styles.dest));

		cb();
}

function scripts(cb) {
 	src(paths.scripts.src)
    .pipe(terser())
		.pipe(concat('./main.js', {newLine: ';'}))
    .pipe(rename({ suffix: '.min' }))
    .pipe(dest(paths.scripts.dest));

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

function watchFiles(cb) {
  watch(paths.styles.src, series(styles));
  watch(paths.scripts.src, series(scripts));
  watch(paths.images.src, series(images));

	cb();
}

const build = series(cleanBuild, parallel(
	styles, 
	scripts, 
	images
), watchFiles);

exports.styles = styles;
exports.scripts = scripts;
exports.images = images;
exports.watchFiles = watch;
exports.cleanBuild = cleanBuild;
exports.default = build;
