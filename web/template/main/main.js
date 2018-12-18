(function () {


    // Высплывающие окна на главной странице

    var popupLogin = document.querySelector(".popup-wrapper--login");
    var popupCloseLogin = document.querySelector(".login__close");

    popupCloseLogin.addEventListener("click", function () {
        popupLogin.classList.remove("popup-wrapper--show");
    });

    var popupReset = document.querySelector(".popup-wrapper--reset");
    var popupCloseReset = document.querySelector(".reset__close");

    popupCloseReset.addEventListener("click", function () {
        popupReset.classList.remove("popup-wrapper--show");
    });

    var popupRegistration = document.querySelector(".popup-wrapper--registration");
    var popupCloseRegistration = document.querySelector(".registration__close");

    popupCloseRegistration.addEventListener("click", function () {
        popupRegistration.classList.remove("popup-wrapper--show");
    });




    // Мобильное меню в хедере

    var mobileBurger = document.querySelector(".header__mobile-burger");
    var mobileMenu = document.querySelector(".header__mobile-menu");

    mobileBurger.addEventListener("click", function () {
        if(!mobileMenu.classList.contains("header__mobile-menu--active")) {
            mobileMenu.classList.add("header__mobile-menu--active");
            mobileBurger.classList.add("header__mobile-burger--active");
        }
        else {
            mobileMenu.classList.remove("header__mobile-menu--active");
            mobileBurger.classList.remove("header__mobile-burger--active");
        }
    });

    var mobileAccount = document.querySelector(".header__mobile-menu .header__account");
    var mobileAccountLinks = document.querySelector(".header__mobile-menu .header__account-menu");

    mobileAccount.addEventListener("click", function () {
        if(!mobileAccountLinks.classList.contains("header__account-menu--active")) {
            mobileAccount.classList.add("header__account--active");
            mobileAccountLinks.classList.add("header__account-menu--active");
        }
        else {
            mobileAccount.classList.remove("header__account--active");
            mobileAccountLinks.classList.remove("header__account-menu--active");
        }
    });



    // СЛАЙДЕРЫ

    //топ-специалисты
    $(document).ready(function(){
        $('.top-specialists--slider .top-specialists__slider').slick({
            centerMode: true,
            variableWidth: true,
            slidesToShow: 1,
            arrows: true,
            prevArrow: $('.top-specialists--slider .top-specialists__arrow--left'),
            nextArrow: $('.top-specialists--slider .top-specialists__arrow--right')
        })
    });

    //результаты медсестры
    $(document).ready(function(){
        $('.results__profiles--slider-nurse .results__slider').slick({
            centerMode: true,
            variableWidth: true,
            slidesToShow: 1,
            arrows: true,
            prevArrow: $('.results__profiles--slider-nurse .results__arrow--left'),
            nextArrow: $('.results__profiles--slider-nurse .results__arrow--right')
        })
    });

    //результаты массажисты
    $(document).ready(function(){
        $('.results__profiles--slider-masseur .results__slider').slick({
            centerMode: true,
            variableWidth: true,
            slidesToShow: 1,
            arrows: true,
            prevArrow: $('.results__profiles--slider-masseur .results__arrow--left'),
            nextArrow: $('.results__profiles--slider-masseur .results__arrow--right')
        })
    });

    //новости
    $(document).ready(function(){
        $('.posts__wrapper--slider .posts__slider').slick({
            centerMode: true,
            variableWidth: true,
            slidesToShow: 1,
            arrows: true,
            prevArrow: $('.posts__wrapper--slider .posts__arrow--left'),
            nextArrow: $('.posts__wrapper--slider .posts__arrow--right')
        })
    });


    // Чекбоксы в селекте

    var servicesCaret = document.querySelector(".select__new-caret--services");
    var servicesWrapper = document.querySelector(".search-specialist__services-wrapper");

    servicesCaret.addEventListener("click", function () {
        if(!servicesWrapper.classList.contains("search-specialist__services-wrapper--active")) {
            servicesWrapper.classList.add("search-specialist__services-wrapper--active");
            servicesCaret.classList.add("select__new-caret--services--active");
        }
        else {
            servicesWrapper.classList.remove("search-specialist__services-wrapper--active");
            servicesCaret.classList.remove("select__new-caret--services--active");
        }
    });


    // Показать весь текст в блоке О нас

    var whyLink = document.querySelector(".why__more");
    var whyText = document.querySelector(".why__text");

    whyLink.addEventListener("click", function () {
        if(!whyText.classList.contains("why__text--show")) {
            whyText.classList.add("why__text--show");
        }
        else {
            whyText.classList.remove("why__text--show");
        }
    });



})();