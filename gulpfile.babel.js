"use strict";
import babel from 'gulp-babel';
import del from 'del';
import gulp from 'gulp';
import uglify from 'gulp-uglify';
import autoprefixer from 'gulp-autoprefixer';
import sass from 'gulp-sass';
// import htmlmin from 'gulp-htmlmin';
import browserSync from 'browser-sync';
import rename from 'gulp-rename';
import imagemin from 'gulp-imagemin';
// import spritesmith from 'gulp.spritesmith';
// import buffer from 'vinyl-buffer';
// import csso from 'gulp-csso';
// import merge from 'merge-stream';
import changed from 'gulp-changed';
import sourcemaps from 'gulp-sourcemaps';
import lineec from 'gulp-line-ending-corrector';
import concat from 'gulp-concat';


const phpConnect = require('gulp-connect-php');
const imageminPngquant = require('imagemin-pngquant');
const server = browserSync.create();

let origem = "./";
let origemNode = './node_modules/';
let destino = "12segredosmktpolitico/";
let clean = () => del([`${destino}/*.php`, `${destino}/css`, `${destino}/js`, `${destino}/images`]);

let paths = {
  styles: {
    src: `${origem}scss/`,
    dest: `${destino}css/`
  },
  scripts: {
    src: `${origem}js/*.js`,
    dest: `${destino}`,
    jsFiles: [
      `${origemNode}jquery/dist/jquery.js`,
      `${origemNode}bootstrap/dist/js/bootstrap.js`,
      `${origem}js/*.js`
    ]
  },
  images: {
    src: `${origem}images/**/*.{png,jpg,jpeg,gif,svg}`,
    srcsprite: origem + "images/sprites/**/*",
    dest: `${destino}`
  },
};

// function sprite() {
//   let spriteData = gulp.src(paths.images.srcsprite, { base: origem }).pipe(spritesmith({
//     imgName: 'sprites.png',
//     cssName: 'sprites.css',
//     imgPath: '../images/',
//   }));

//   let imgStream = spriteData.img
//     .pipe(buffer())
//     .pipe(imagemin())
//     .pipe(gulp.dest(paths.images.dest));

//   let cssStream = spriteData.css
//     .pipe(csso())
//     .pipe(gulp.dest(paths.styles.dest));

//   return merge(imgStream, cssStream);
// }

// function bs(done) {
//   server.init([paths.html.src], {
//     watchTask: true,
//     reloadOnRestart: true,
//     server: {
//       baseDir: destino
//     }
//   });
//   done();
//   gulp.watch(`${paths.styles.src}**/*.scss`, css);
//   gulp.watch(paths.scripts.src, gulp.series(javascript, reload));
//   // gulp.watch(paths.html.src).on('change', copy);
// }

// const dev = gulp.series(
//   clean,
//   // copy,
//   // copyPHP,
//   css,
//   javascript,
//   connectsync,
//   watch,
//   // imgmin,
//   // sprite,
//   // bs, 
// );

function css() {
  return gulp
    .src(`${paths.styles.src}**/*.scss`)
    .pipe(
      sourcemaps.init({
        loadMaps: true
      })
    )
    .pipe(
      sass({
        outputStyle: "compressed"
      }).on("error", sass.logError)
    )
    .pipe(
      autoprefixer({
        browsers: ["last 8 versions"],
        cascade: false
      })
    )
    .pipe(
      rename({
        suffix: ".min"
      })
    )
    .pipe(sourcemaps.write("/"))
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(browserSync.stream());
}

function javascript() {
  return gulp.src(paths.scripts.jsFiles, {
    sourcemaps: true,
  })
    .on('error', function (err) {
      gutil.log(gutil.colors.red('[Error]'), err.toString());
    })
    .pipe(babel({
      presets: ['@babel/env']
    }))
    .pipe(uglify())
    .pipe(lineec())
    .pipe(concat(`js/app.min.js`))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.scripts.dest))
    .pipe(browserSync.stream());
}

function imgmin() {
  return gulp
    .src(paths.images.src, { base: origem })
    .pipe(changed(paths.images.src))
    .pipe(imagemin({
      progressive: true,
      svgoPlugins: [{ removeViewBox: false }],
      use: [imageminPngquant()]
    }))
    .pipe(gulp.dest(`${destino}`))
    .pipe(browserSync.stream());
}

function php() {
  return gulp.src(`php/**/*.php`).pipe(gulp.dest(`${destino}`));
}

function watch() {
  gulp.watch(`${paths.styles.src}**/*.scss`, { interval: 500 }, gulp.series(css));
  gulp.watch(`${paths.scripts.src}`, { interval: 500 }, gulp.series(javascript, reload));
  // gulp.watch(`${origem}/php/*.php`, gulp.series(php, reload));
  gulp.watch(`${origem}/php/*.php`).on('change', function () {
    php();
    reload();
  });
  gulp.watch('images/*.{png,jpg,jpeg,gif,svg}', { cwd: './' }['imgmin']);
}

function connectsync(done) {
  phpConnect.server({
    watchTask: true,
    reloadOnRestart: true,
    keepalive: true,
    base: "/"
  }, function () {
    browserSync({
      proxy: '12segredosmktpolitico.local',
      watchOptions: {
        debounceDelay: 1000
      }
    });
  });

  done();
  watch();
}

function reload(done) {
  server.reload();
  done();
}
// const dev = gulp.parallel([php]);
const dev = gulp.parallel([clean, php, connectsync, css, javascript, imgmin]);

exports.default = dev;