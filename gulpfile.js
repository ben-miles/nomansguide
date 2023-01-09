const gulp = require('gulp');
const autoprefixer = require('gulp-autoprefixer');
const rename = require('gulp-rename');

gulp.task('prefix', () =>
    gulp.src('./css/app.css')
		}))
		.pipe(autoprefixer({cascade: false}))
		.pipe(rename('app-prefixed.css'))
    	.pipe(gulp.dest('./css/'))
);

// gulp.task('prefix', () =>
//     gulp.src('styleTest.css')
//         .pipe(autoprefixer({
//             browsers: ['last 99 versions'],
//             cascade: false
//     }))
//     .pipe(gulp.dest('style'))
// );

function defaultTask(cb) {
	// place code for your default task here
	cb();
}

exports.default = defaultTask;
