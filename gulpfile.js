// built using https://goede.site/setting-up-gulp-4-for-automatic-sass-compilation-and-css-injection
// Required Files
var gulp = require("gulp"),
    sass = require("gulp-sass"),
    postcss = require("gulp-postcss"),
    autoprefixer = require("autoprefixer"),
    cssnano = require("cssnano"),
    sourcemaps = require("gulp-sourcemaps"),
    browserSync = require("browser-sync").create();

//declare some variables
var paths = {
    styles: {
        src: "app/assets/scss/*.scss",
        dest: "app/assets/css"
    }
};

//Get Sassy
gulp.task('default', () =>
    gulp.src('src/app.css')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('dist'))
);


//Do all the things
function style() {
    return (
        gulp
            .src(paths.styles.src)
            // Initialize sourcemaps before compilation starts
            .pipe(sourcemaps.init())
            .pipe(sass())
            .on("error", sass.logError)
            // Use postcss with autoprefixer and compress the compiled file using cssnano
            .pipe(postcss([autoprefixer({
            browsers: ['last 3 versions'],
            cascade: false
            }), cssnano()]))

            .pipe(gulp.dest(paths.styles.dest))
            // Add browsersync stream pipe after compilation
            .pipe(browserSync.stream())
    );
};


// Compile sass only from the CLI using $ gulp style
exports.style = style;


function reload(done) {
  browserSync.reload();
  done();
}

 
function watch() {
    browserSync.init({
        proxy: "trentblog.local" //CHANGE ME TO WHATEVER FLYWHEEL GENERATES
    });
    gulp.watch(paths.styles.src, style);
    gulp.watch("app/assets/js/*.js", reload);
    gulp.watch("app/*.php", reload);
    gulp.watch("app/*.html", reload);

}

    
// Don't forget to expose the task!
exports.watch = watch;

