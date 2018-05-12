var gulp   = require('gulp')
var coffee = require('gulp-coffee')
var sass = require('gulp-sass')

gulp.task ('compile-coffee', function(){
  gulp.src('./app/assets/coffee/**/*.coffee')
    .pipe(coffee())
    .pipe(gulp.dest('./webroot/js/'))
})



gulp.task('sass', function(){
    //scssディレクトリの指定
    gulp.src('./app/assets/sass/**/*.scss')
    //コンパイル実行
    .pipe(sass({style : 'expanded'})) //出力形式の種類　#nested, compact, compressed, expanded.
    //出力先の指定
    .pipe(gulp.dest('./app/webroot/css/'));
});


//自動監視のタスクを作成(watchと名付ける)
gulp.task('watch', ['sass'], function(){
  var watcher = gulp.watch('./app/assets/sass/**/*.scss', ['sass']);
  watcher.on('change', function(event) {
  });
});

gulp.task('default', ['watch','compile-coffee']);
