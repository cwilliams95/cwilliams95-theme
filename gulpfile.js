var gulp = require('gulp'),
    concat = require('gulp-concat'),
    rename = require("gulp-rename"),
    zip = require('gulp-zip'),
    sass = require('gulp-sass'),
    bulkSass = require('gulp-sass-glob-import'),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCSS = require('gulp-clean-css'),
    uglify = require('gulp-uglify'),
    htmlrender = require('gulp-htmlrender'),
    htmlmin = require('gulp-htmlmin'),
    svgmin = require('gulp-svgmin');

var paths = {
  scss: 'scss/**/*.scss',
  // js: 'js/**/*.js',
  // html: 'html/**/*.html',
  // svg: 'svg/*.svg',
  dist: 'cwilliams95'
};

gulp.task('watch', function() {
  gulp.watch(paths.scss, ['stylesheets']);
  // gulp.watch(paths.js, ['scripts']);
  // gulp.watch(paths.html, ['html']);
  // gulp.watch(paths.svg, ['svg']);
  // gulp.watch([paths.dist + '/*', '!' + paths.dist + '/*.zip'], ['compress']);
});

gulp.task('stylesheets', function () {
  return gulp.src(paths.scss)
    .pipe(bulkSass()) //Import multiple sass files in a directory
    .pipe(sass({
                  outputStyle: 'compact',
                  indentedSyntax: false
                }).on('error', sass.logError)
          )
    .pipe(autoprefixer({
                          browsers: ['> 5%', 'last 2 versions'],
                          cascade: false
                        })
          )
    // .pipe(cleanCSS({
    //                   keepSpecialComments: false,
    //                   processImport: false
    //                 })
    //       )
    .pipe(concat('new-york-ave.min.css'))
    .pipe(gulp.dest('css'))
    .pipe(rename('custom_style.css'))
    .pipe(gulp.dest(paths.dist));
});

// gulp.task('scripts', function() {
//   return gulp.src(paths.js)
//     .pipe(uglify())
//     .pipe(concat('scripts.min.js'))
//     .pipe(gulp.dest(paths.dist));
// });
//
// gulp.task('html', function() {
//   gulp.src('html/*.html')
//     .pipe(htmlrender.render()) //Render partials into complete HTML
//     // .pipe(htmlmin({
//     //                 // removeComments: true,
//     //                 // removeTagWhitespace: true,
//     //                 // collapseWhitespace: true,
//     //                 removeScriptTypeAttributes: true,
//     //                 minifyJS: true,
//     //                 minifyCSS: true
//     //               })
//     //       )
//     .pipe(gulp.dest(paths.dist));
// });
//
// gulp.task('svg', function () {
//     return gulp.src(paths.svg)
//         .pipe(svgmin())
//         .pipe(gulp.dest('./dist'));
// });
//
// gulp.task('compress', function(){
//   return gulp.src([paths.dist + '/*', '!' + paths.dist + '/*.zip'])
//   .pipe(zip('new-york-ave.zip'))
//   .pipe(gulp.dest(paths.dist));
// });

gulp.task('default', ['watch', 'stylesheets']);
