const { src, dest, watch, series, parallel, task } = require('gulp');
const scss = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const rename = require("gulp-rename");

const paths = {
	styles: {
		src: 'src/css/scss/*.scss',
		dest: 'src/css'
	}
};

function styles() {
	return ( src(paths.styles.src)
		.pipe(scss())
		.pipe(autoprefixer())
		.pipe(cleanCSS())
		.pipe(rename({ suffix: '.min' }))
		.pipe(dest(paths.styles.dest))
	)
}

function watchFiles() {
	watch(paths.styles.src, styles);
}

const build = series(parallel(watchFiles, styles));

exports.styles = styles;
exports.watchFiles = watch;
exports.default = build;