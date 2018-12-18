var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    cleanCSS = require('gulp-clean-css');

gulp.task('styles', function () {
    gulp.src(['./css/ui.css', './css/main.css', './css/vacancy-add.css', './css/rate-specialist.css', './css/rate-employer.css', './css/account-vacancy.css', './css/account-subscribe.css', './css/account-settings.css', './css/account-response.css', './css/account-questionnaire.css', './css/favourite-vacancy.css', './css/favourite-specialist.css', './css/search-vacancy.css', './css/vacancy-page.css', './css/vacancy-map.css', './css/search-specialist.css', './css/specialist-map.css', './css/specialist-page.css', './css/posts.css', './css/post-page.css', './css/patient.css', './css/contact-us.css', './css/404.css', './css/terms.css', './css/new-popups.css'])
        .pipe(concat('all.css'))
        .pipe(cleanCSS())
        .pipe(gulp.dest('./css/'));
});
gulp.task('sass', function(){
    gulp.src(['ui/*.scss', 'main/*.scss', 'vacancy-add/*.scss', 'rate-specialist/*.scss', 'rate-employer/*.scss', 'account-vacancy/*.scss', 'account-subscribe/*.scss', 'account-settings/*.scss', 'account-response/*.scss', 'account-questionnaire/*.scss', 'favourite-vacancy/*.scss', 'favourite-specialist/*.scss', 'search-vacancy/*.scss', 'vacancy-page/*.scss', 'vacancy-map/*.scss', 'search-specialist/*.scss', 'specialist-map/*.scss', 'specialist-page/*.scss', 'posts/*.scss', 'post-page/*.scss', 'patient/*.scss', 'contact-us/*.scss', '404/*.scss', 'terms/*.scss', 'new-popups/*.scss' ])
        .pipe(sass())
        .pipe(concat('all.css'))
        .pipe(cleanCSS())
        .pipe(gulp.dest('css/'))
});