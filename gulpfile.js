//----------------------------------------------------------------------
//  パッケージinstall
//----------------------------------------------------------------------
//  sudo npm install [] --save : dependencies
//  sudo npm install [] --save-dev : devDependencies
//  npm list -g --depth=0 : グローバルpackage
//  npm list --depth=0 : ローカルpackage
//  npm install

//----------------------------------------------------------------------
//  モード
//----------------------------------------------------------------------
"use strict";

//----------------------------------------------------------------------
//  モジュール読み込み
//----------------------------------------------------------------------
const { src, dest, series, parallel, watch, tree } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("gulp-autoprefixer");
const browserSync = require("browser-sync");
const useforword = require("gulp-sass-glob-use-forward")
const sassGlob = require("gulp-sass-glob");
const uglify = require("gulp-uglify");
const concat = require("gulp-concat");
const plumber = require("gulp-plumber");
const rename = require("gulp-rename");
const cleanCSS = require("gulp-clean-css");
const sourcemaps = require("gulp-sourcemaps");

const imageMin = require("gulp-imagemin");
const mozjpeg = require("imagemin-mozjpeg");
const pngquant = require("imagemin-pngquant");

const webp = require("gulp-webp");

//----------------------------------------------------------------------
//  Const var
//----------------------------------------------------------------------
const paths = {
  'scss': 'src/sass/',
  'dest_css': '.',

  'js' : 'src/js/',
  'dest_js' : 'assets/js/',

  'img' : 'src/',
  'dest_img' : 'assets/'
}

const proxy_name = 'http://localhost:8080'
//const proxy_name = 'http://169.254.67.252:5500'

const browser_name = 'Firefox'


//----------------------------------------------------------------------
//  Sassコンパイル
//----------------------------------------------------------------------
const compileSass = (done) => {
  src(paths.scss + 'style.scss')
    .pipe(sourcemaps.init())
    .pipe(plumber()) //watchの継続
    .pipe(autoprefixer()) //ベンダープレフィックスを付与
    .pipe(sassGlob()) //@import文を省略
    .pipe(useforword()) //@useと@forwardを省略
    .pipe(sass({outputStyle: "compressed"})) //コンパイル
    // .pipe(cleanCSS()) //cssを圧縮
    // .pipe(rename({//.min.cssを付与
    //   extname:'.min.css'
    // }))
    .pipe(sourcemaps.write(paths.dest_css))
    .pipe(dest(paths.dest_css)) //出力

    .pipe(browserSync.reload({stream: true}))

  done();
}
//----------------------------------------------------------------------
//  Jsコンパイル
//----------------------------------------------------------------------
const compileJs = (done) => {
  var jsFiles = [
    //Js File
    //paths.js + "iscroll.js",
    //paths.js + "drawer.js",
    //paths.js + "slick.js",
    //paths.js + "modaal.js",
    //paths.js + "scroll-hint.js",
    //paths.js + "gsap.js",
    //paths.js + "ScrollTrigger.js",
    //paths.js + "velocity.js",
    //paths.js + "sticky-sidebar.js",
    //paths.js + "animation.js",

    //
    paths.js+"script.js",
  ];
  src(jsFiles)
    .pipe(plumber()) //watchの継続
    .pipe(concat('all.min.js')) //結合
    .pipe(uglify()) //minify
    .pipe(dest(paths.dest_js))
    .pipe(browserSync.reload({stream: true}))
  done();
}

//----------------------------------------------------------------------
//  Browser Sync
//----------------------------------------------------------------------
const browserSyncTask = (done) => {
  browserSync({
    proxy: proxy_name,
    browser: browser_name
  })
  done();
}

//----------------------------------------------------------------------
//  Browser Reload
//----------------------------------------------------------------------
const browserReload = (done) => {
  browserSync.reload();
  done();
}

//----------------------------------------------------------------------
//  Image Minify
//----------------------------------------------------------------------
const imagemin = (done) => {
  src(paths.img + "**")
  .pipe(
    imageMin([
      pngquant({                // 追加
        quality: [0.6, 0.7],
        speed: 1,
      }),
      mozjpeg({ quality: 80 }), // 追加
      imageMin.svgo(),
      imageMin.optipng(),
      imageMin.gifsicle({ optimizationLevel: 3 }),
   ])
  )
  .pipe(dest(paths.dest_img));

  done();
}

//----------------------------------------------------------------------
//  Image Minify Wedp
//----------------------------------------------------------------------
const imageminWebp = (done) => {
  src(paths.img + "**")
  // .pipe(
  //   imageMin([
  //     pngquant({                // 追加
  //       quality: [0.6, 0.7],
  //       speed: 1,
  //     }),
  //     mozjpeg({ quality: 100 }), // 追加
  //     imageMin.svgo(),
  //     imageMin.optipng(),
  //     imageMin.gifsicle({ optimizationLevel: 3 }),

  //  ])
  // )
  .pipe(webp({
    quality: 90,
    method: 6
  }))
  .pipe(dest(paths.dest_img));

  done();
}


const doTask = (done) => {

  watch(paths.scss + '**/*.scss', compileSass);
  watch(paths.js + '*.js', compileJs);
  watch("./**/*.php", browserReload);

  src('src/**/*.{jpg,jpeg,png}')
      .pipe(webp())
      .pipe(dest(paths.dest_img))


      src(paths.img + "**")
      .pipe(
        imageMin([
          pngquant({                // 追加
            quality: [0.6, 0.7],
            speed: 1,
          }),
          mozjpeg({ quality: 80 }), // 追加
          imageMin.svgo(),
          imageMin.optipng(),
          imageMin.gifsicle({ optimizationLevel: 3 }),
      ])
      )
      .pipe(dest(paths.dest_img));


  done();
}





// 実行する
//exports.imagemin = imagemin;
//exports.imageminWebp = imageminWebp;
exports.default = parallel(browserSyncTask, doTask);
