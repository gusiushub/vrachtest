(function () {

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


    // Показать весь текст в блоке Тариф

    var moneyHead = document.querySelector(".navigation__money-head");
    var moneyText = document.querySelector(".navigation__money--mobile");

    moneyHead.addEventListener("click", function () {
        if(!moneyText.classList.contains("navigation__money--mobile--show")) {
            moneyText.classList.add("navigation__money--mobile--show");
        }
        else {
            moneyText.classList.remove("navigation__money--mobile--show");
        }
    });


    // Показать всю форму

    var formHead = document.querySelector(".form__head");
    var formBody = document.querySelector(".form");

    formHead.addEventListener("click", function () {
        if(!formBody.classList.contains("form--show")) {
            formBody.classList.add("form--show");
        }
        else {
            formBody.classList.remove("form--show");
        }
    });


    // Чекбоксы в селекте

    var servicesCaret = document.querySelector(".select__new-caret--services");
    var servicesWrapper = document.querySelector(".form__services-wrapper");

    servicesCaret.addEventListener("click", function () {
        if(!servicesWrapper.classList.contains("form__services-wrapper--active")) {
            servicesWrapper.classList.add("form__services-wrapper--active");
            servicesCaret.classList.add("form__new-caret--services--active");
        }
        else {
            servicesWrapper.classList.remove("form__services-wrapper--active");
            servicesCaret.classList.remove("form__new-caret--services--active");
        }
    });


    // Показать весь текст в блоке О себе

    var areaHead = document.querySelectorAll(".form__area-header");
    var areaText = document.querySelectorAll(".form__area");

    for (var i=0; i<areaHead.length; i++) {

        (function (areaHead, i) {
            areaHead[i].addEventListener("click", function () {
                if (!areaText[i].classList.contains("form__area--show")) {
                    areaText[i].classList.add("form__area--show");
                }
                else {
                    areaText[i].classList.remove("form__area--show");
                }
            });
        })(areaHead, i);
    }



    // Показать textarea в блоке О себе

    var areaTab = document.querySelectorAll(".form__area-tab");
    var areaInput = document.querySelectorAll(".form__areas-wrapper");
    var areaActive = 0;

    for (var i=0; i<areaTab.length; i++) {

        (function (areaTab, i) {
            areaTab[i].addEventListener("click", function () {
                if (!areaInput[i].classList.contains("form__areas-wrapper--active")) {
                    areaInput[areaActive].classList.remove("form__areas-wrapper--active");
                    areaInput[i].classList.add("form__areas-wrapper--active");
                    areaTab[areaActive].classList.remove("form__area-tab--active");
                    areaTab[i].classList.add("form__area-tab--active");
                    areaActive = i;
                }
                // else {
                //     areaInput[i].classList.remove("form__areas-wrapper--active");
                // }
            });
        })(areaTab, i);
    }



    $(document).ready(function(){
        $('.navigation__photo--slider .slick__slider').slick({
            centerMode: true,
            variableWidth: true,
            slidesToShow: 1,
            arrows: true,
            prevArrow: $('.navigation__photo--slider .slick__arrow--left'),
            nextArrow: $('.navigation__photo--slider .slick__arrow--right')
        })
    });



})();