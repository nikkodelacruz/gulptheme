'use strict';

// Configurations

// Plugins
const { src, dest, series, parallel, watch } = require('gulp');
const sass = require('gulp-sass'); // compile scss/sass to css
const cleanCSS = require('gulp-clean-css'); // minify css
const rename = require('gulp-rename'); //rename dest file, add prefix or suffix
const concat = require('gulp-concat'); // combine all files into one file
const uglify = require('gulp-uglify'); // minify js
const autoprefixer = require('gulp-autoprefixer'); // add autoprix to css properties
const sourcemaps = require('gulp-sourcemaps'); // display the original instead of compiled version in inspector
const babel = require('gulp-babel');
const browserSync = require('browser-sync').create(); // apply the changes(js,css) w/o reloading the page
const reload = browserSync.reload;

// Source files
const sass_src = 'assets/scss/**/*.scss';
const js_src = 'assets/js/**/*.js';

// Output Source
const build_src = 'assets/build'; // build here

// BrowserSync files
const theme_files = '**/*php'; // files from theme

// URL
const web_url = 'localhost/wordpress';

// SASS
function css(){
	return src(sass_src)
	.pipe( sourcemaps.init() )
	.pipe( sass().on('error', sass.logError) )
	.pipe( autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }) )
	.pipe( cleanCSS() )
	.pipe( concat('style.css') )
	.pipe( rename( {suffix: '.min'} ) )
	.pipe( sourcemaps.write('./maps') )
	.pipe( dest(build_src) )
	.pipe( browserSync.stream() )
}

// JS
function js(){
	return src( js_src )
	.pipe(babel({
		presets: ['@babel/env']
	}))
	.pipe( uglify() )
	.pipe( concat('script.js') )
	.pipe( rename( {suffix: '.min'} ) )
	.pipe( dest(build_src) )
	.pipe( browserSync.stream() )
}

// Live reload
function browser_sync(){
	var files = [ theme_files ];
	browserSync.init(files, {
		// open: false, disable opening site after run
		proxy: web_url, // local url
		injecChanges: true
	});
}

// Specific compile/build
exports.css = css;
exports.browser_sync = browser_sync;

// Watch
exports.build = browser_sync;
exports.default = function(){
	// watch(browser_sync);
	// browser_sync(); //call this on first run
	watch( theme_files, browser_sync );
	watch( sass_src, css );
	watch( js_src, js );

	// You can use a single task
	// watch('src/*.css', css);
	// Or a composed task
	// watch('src/*.js', series(clean, javascript));
}

