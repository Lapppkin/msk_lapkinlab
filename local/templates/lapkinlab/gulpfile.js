var gulp = require("./node_modules/gulp"),
  plumber = require("./node_modules/gulp-plumber"),
  sass = require("./node_modules/gulp-sass"), // compile sass
  sourcemaps = require("./node_modules/gulp-sourcemaps"),
  prefix = require("./node_modules/gulp-autoprefixer"),
  rename = require("./node_modules/gulp-rename"), // compile js
  uglify = require("./node_modules/gulp-uglify-es/lib").default,
  webpack = require("./node_modules/webpack/lib/webpack"),
  webpackStream = require("./node_modules/webpack-stream"),
  browserSync = require("./node_modules/browser-sync/dist").create(),
  csso = require("./node_modules/gulp-csso"),
  purify = require("./node_modules/gulp-purifycss");

var assetsDir = "_src/";
var outputDir = "./";
var siteDomain = "dev.msk.lapkinlab.ru";

gulp.task("browser-sync", function () {
  browserSync.init({
    proxy: siteDomain
  });
});

gulp.task("sass", function () {
  gulp.src([
    assetsDir + "css/**/*.sass",
    "!" + assetsDir + "css/**/_*.sass",
    assetsDir + "css/**/*.scss",
    "!" + assetsDir + "css/**/_*.scss"
  ])
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(prefix("last 3 versions"))
    .pipe(sourcemaps.write())
    .pipe(rename({
      basename: 'template_styles',
      extname: '.css'
    }))
    .pipe(gulp.dest(outputDir))
    .pipe(browserSync.stream());
});

gulp.task("js", function () {
  return gulp
    .src(assetsDir + "js/app.js")
    .pipe(
      webpackStream({
        output: {
          filename: "app.js"
        },
        module: {
          rules: [
            {
              test: /\.vue$/,
              loader: "vue-loader"
            },
            {
              test: /\.(js)$/,
              exclude: /(node_modules)/,
              loader: "babel-loader",
              query: {
                presets: ["env"]
              }
            }
          ]
        },
        resolve: {
          alias: {
            vue$: "vue/dist/vue.common.js"
          }
        }
      })
    )
    .pipe(rename({
      basename: 'new-pages',
      extname: '.js'
    }))
    .pipe(gulp.dest(outputDir + "js/"))
    .pipe(browserSync.stream());
});

gulp.task("watch", function () {
  gulp.watch(assetsDir + "css/**/*.scss", ["sass"]);
  gulp.watch(assetsDir + "css/**/*.sass", ["sass"]);
  // gulp.watch(assetsDir + "js/**/*.js", ["js"]);
  // gulp.watch(assetsDir + "js/**/*.vue", ["js"]);
});


gulp.task("default", ["sass", "watch", "browser-sync"]);

/**
 * BUILD PROJECT
 */
gulp.task("buildCss", function () {
  return gulp
    .src([
      assetsDir + "sass/**/*.sass",
      "!" + assetsDir + "sass/**/_*.sass",
      assetsDir + "sass/**/*.scss",
      "!" + assetsDir + "sass/**/_*.scss"
    ])
    .pipe(plumber())
    .pipe(sass())
    .pipe(prefix("last 3 versions"))
    .pipe(csso())
    .pipe(gulp.dest(outputDir + "css/"));
});

gulp.task("buildJs", function () {
  return gulp
    .src(assetsDir + "js/app.js")
    .pipe(
      webpackStream({
        output: {
          filename: "app.js"
        },
        module: {
          rules: [
            {
              test: /\.vue$/,
              loader: "vue-loader"
            },
            {
              test: /\.(js)$/,
              exclude: /(node_modules)/,
              loader: "babel-loader",
              query: {
                presets: ["env"]
              }
            }
          ]
        },
        resolve: {
          alias: {
            vue$: "vue/dist/vue.common.js"
          }
        }
      })
    )
    .pipe(uglify())
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest(outputDir + "js/"));
});

gulp.task("build", function () {
  gulp.start("buildJs", "buildCss");
});

/**
 * BUILD PROJECT
 */
