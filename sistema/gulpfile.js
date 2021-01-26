/* TESTE */

var gulp = require('gulp');
var concat = require('gulp-concat');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var browserSync = require('browser-sync').create();

gulp.task('default', function() {
  return console.log('funcionando');
});
 

gulp.task('scripts', function() {
    return gulp.src([
        './resources/assets/js/jquery.js',
        './resources/assets/js/bootstrap.js',
        './resources/assets/js/adminlte.js',
        './resources/assets/js/internetexplore.js',        
        './resources/assets/js/jquerymask.js',  
        './resources/assets/js/cep-automatico.js',          
        './resources/assets/js/funcoes.js'
        
        
      ])
      .pipe(concat('all.js'))
      .pipe(gulp.dest('./js/'));
  });


  gulp.task('sass', function () {
    return gulp.src([
        './resources/assets/sass/skin-pasanaku.scss',
        './resources/assets/sass/style.scss'
    ])
      .pipe(sass().on('error', sass.logError))
      .pipe(gulp.dest('./resources/assets/css/'));
  });

  gulp.task('styles', function() {
    return gulp.src([
        './resources/assets/css/bootstrap.css',
        './resources/assets/css/fontawesome.css',
        './resources/assets/css/adminlte.css',       
        './resources/assets/css/skin-pasanaku.css',
        './resources/assets/css/style.css'
        
      ])
      .pipe(concat('all.css'))
      .pipe(gulp.dest('./css/'));
  });
  
  gulp.task('watch', function () {    
    gulp.watch('./resources/assets/sass/*.scss', ['sass']);
    gulp.watch('./resources/assets/css/*.css', ['styles']);
    gulp.watch('./resources/assets/js/*.js', ['scripts']);
  });

  
