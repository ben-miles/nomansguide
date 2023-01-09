require('dotenv').config();
const { watch, series, src, dest } = require('gulp');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');
const tinypng = require('gulp-tinypng-compress');
const uglify = require('gulp-uglify');

// CMD: `gulp css`
// Autoprefixes, minifies, and renames the custom CSS
function css(cb){
	src('./css/app.css')
	.pipe(autoprefixer({cascade: false}))
	.pipe(cleanCSS())
	.pipe(rename('app.min.css'))
	.pipe(dest('./css/'));
	cb();
}

// CMD: `gulp img`
// Compresses Item PNGs
function img(cb){
	src('./img/item/*')
	.pipe(tinypng({
		key: process.env.TINYPNG_API_KEY,
		sigFile: './img/item/.tinypng-sigs'
	}))
	.pipe(dest('./img/item/min/'));
	cb();
}

// CMD: `gulp js`
// Minifies and renames the custom JS
function js(cb){
	src('./js/app.js')
	.pipe(uglify())
	.pipe(rename('app.min.js'))
	.pipe(dest('./js/'));
	cb();
}

// CMD: `gulp`
// Runs the CSS and JS tasks immediately, and whenever the source files are changed
function defaultTask(cb) {
	watch('./css/app.css', { ignoreInitial: false }, css);
	watch('./img/item/*.png', { ignoreInitial: false }, img);
	watch('./js/app.js', { ignoreInitial: false }, js);
	cb();
}

exports.css = css;
exports.img = img;
exports.js = js;
exports.default = defaultTask;