const gulp = require('gulp'),
    sass = require('gulp-sass')(require('node-sass')),
    notify = require('gulp-notify'),
    sourcemaps = require('gulp-sourcemaps'),
    browserSync = require('browser-sync').create(),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCSS = require('gulp-clean-css'),
    gcmq = require('gulp-group-css-media-queries'),
    babel = require('gulp-babel'),
    rename = require("gulp-rename"),
    uglify = require('gulp-uglify-es').default,
    imagemin = require('gulp-imagemin'),
    image = require('gulp-image'),
    clean = require('gulp-clean'),
    htmlmin = require('gulp-htmlmin');

const ProxyServer = true;
const domain = 'localhost/session-media';
const root = '';

const paths = {
    scss: {
        src: [
            'assets/css/*.scss',
            'assets/css/components/*.scss',
            'assets/css/other/*.scss',
            'assets/css/pages/*.scss',
            'assets/css/sections/*.scss',
        ],
        dest: 'assets/css'
    },
    js: {
        src: 'assets/js/main.js',
        dest: 'assets/js/'
    },
    img: {
        src: 'assets/img/**/**/*',
        dest: 'assets/img/'
    },
};


function serve() {
    if (ProxyServer) {
        browserSync.init({
            proxy: domain,
            notify: false
        });
    } else {
        browserSync.init({
            server: {
                baseDir: root
            },
            notify: false
        });
    }
}

function reload(done) {
    browserSync.reload();
    done();
}

function watch() {
    gulp.watch(paths.scss.src, gulp.series(scss));
    gulp.watch(paths.js.src, gulp.series(js));
}

function js(done) {
    return gulp.src(paths.js.src)

        .pipe(sourcemaps.init())
        .pipe(babel({presets: ['@babel/env']}))
        .pipe(rename("main.min.js"))
        .pipe(uglify())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(paths.js.dest));
    done();
}

function scss(done) {
    return gulp.src(paths.scss.src)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', notify.onError({
            message: "<%= error.message %>",
            title: "Sass Error!"
        })))
        .pipe(autoprefixer())
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(paths.scss.dest))
        .pipe(browserSync.stream());
    done();
}

function img(done) {
    return gulp.src(paths.img.src)
        .pipe(imagemin([
            imagemin.gifsicle({interlaced: true}),
            imagemin.jpegtran({progressive: true}),
            imagemin.optipng({optimizationLevel: 5}),
            imagemin.svgo({
                plugins: [
                    {removeViewBox: true},
                    {cleanupIDs: false}
                ]
            })
        ]))
        .pipe(image({
            svgo: false
        }))
        .pipe(gulp.dest(paths.img.dest));
    done();
}

exports.serve = serve;
exports.reload = reload;
exports.watch = watch;
exports.js = js;
exports.scss = scss;
exports.img = img;
exports.default = gulp.series(gulp.parallel(scss, js), gulp.parallel(watch, serve));


