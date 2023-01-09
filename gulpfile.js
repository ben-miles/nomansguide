const { watch, series, src, dest } = require('gulp');
const autoprefixer = require('gulp-autoprefixer');
const rename = require('gulp-rename');

function css(cb){
	src('./css/app.css')
		.pipe(autoprefixer({cascade: false}))
		.pipe(rename('app-prefixed.css'))
		.pipe(dest('./css/'));
	cb();
}

function defaultTask(cb) {
	watch('./css/app.css', { ignoreInitial: false }, css);
	cb();
}

exports.css = css;
exports.default = defaultTask;