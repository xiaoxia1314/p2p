var gulp = require('gulp');

// 引入路径
var path = require('path');
// var clearCss=require('gulp-clean-css');
// 引入gulp-less
var less=require('gulp-less');
var sass=require('gulp-sass');
// 压缩js
var uglify=require('gulp-uglify');
// 更改名字
var reName = require('gulp-rename');
// 压缩
var cleanCss = require('gulp-clean-css');
// 热刷新
var livereload=require('gulp-livereload');


gulp.task('lessTask', function () {
    gulp.src('./src/less/*.less') //源文件路径
        .pipe(less({
            paths: [path.join(__dirname, 'less', 'includes')]  //压缩less成css
        }))
        .pipe(cleanCss()) //压缩css
        .pipe(reName(function (path) {
            path.basename += ".min";  //更改css的名字
        }))
        .pipe(gulp.dest('./dist/css')) //目标路径
        .pipe(livereload()); //热刷新
})


gulp.task('sassTask', function () {
    gulp.src('./src/sass/*.scss') //源文件路径
        .pipe(sass().on('error', sass.logError))
        .pipe(cleanCss())
        .pipe(reName(function (path) {
            path.basename += ".min";  //更改css的名字
        }))
        .pipe(gulp.dest('./dist/css')) //目标路径
        .pipe(livereload()); //热刷新
})

gulp.task('uglifyJs', function () {
    gulp.src('./src/js/*.js') //源文件路径
        .pipe(uglify()) //压缩成js
        .pipe(reName(function (path) {
            path.basename += ".min";  //更改css的名字
        }))
        .pipe(gulp.dest('./dist/js')) //目标路径
        .pipe(livereload()); //热刷新
})

gulp.task("default",function(){
    // 监听热刷新
    livereload.listen();
    gulp.watch("./src/less/*.less",["lessTask"]);
    gulp.watch("./src/sass/*.scss",["sassTask"]);
    gulp.watch("./src/js/*.js",["uglifyJs"]);
})