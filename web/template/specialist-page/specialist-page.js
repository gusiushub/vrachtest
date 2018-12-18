(function () {
    var mobileBurger = document.querySelector(".header__mobile-burger");
    var mobileMenu = document.querySelector(".header__mobile-menu");

    mobileBurger.addEventListener("click", function () {
        if (!mobileMenu.classList.contains("header__mobile-menu--active")) {
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
        if (!mobileAccountLinks.classList.contains("header__account-menu--active")) {
            mobileAccount.classList.add("header__account--active");
            mobileAccountLinks.classList.add("header__account-menu--active");
        }
        else {
            mobileAccount.classList.remove("header__account--active");
            mobileAccountLinks.classList.remove("header__account-menu--active");
        }
    });




    $(document).ready(function(){
        $('.top-specialists--slider .slick__slider').slick({
            centerMode: true,
            variableWidth: true,
            slidesToShow: 1,
            arrows: true,
            prevArrow: $('.top-specialists--slider .slick__arrow--left'),
            nextArrow: $('.top-specialists--slider .slick__arrow--right')
        })
    });





    var tabsItem = document.querySelectorAll(".tabs__item");
    var tabsBlock = document.querySelectorAll(".tabs__block");
    var tabsActive = 0;

    for (var i=0; i<tabsItem.length; i++) {

        (function (tabsItem, i) {
            tabsItem[i].addEventListener("click", function () {
                if (!tabsBlock[i].classList.contains("tabs__block--active")) {
                    tabsBlock[tabsActive].classList.remove("tabs__block--active");
                    tabsItem[tabsActive].classList.remove("tabs__item--active");
                    tabsBlock[i].classList.add("tabs__block--active");
                    tabsItem[i].classList.add("tabs__item--active");
                    tabsActive = i;
                }
            });
        })(tabsItem, i);
    }







    var blockHead = document.querySelectorAll(".tabs__block-header");
    var blockText = document.querySelectorAll(".tabs__block");

    for (var i=0; i<blockHead.length; i++) {

        (function (blockHead, i) {
            blockText[i].addEventListener("click", function () {
                if (!blockText[i].classList.contains("tabs__block--show")) {
                    blockText[i].classList.add("tabs__block--show");
                    blockHead[i].classList.add("tabs__block-header--show");
                }
                else {
                    blockText[i].classList.remove("tabs__block--show");
                    blockHead[i].classList.remove("tabs__block-header--show");
                }
            });
        })(blockHead, i);
    }




    var requestButton = document.querySelector(".profile__actions .button");
    var requestPopup = document.querySelector(".popup-wrapper--request");
    var requestClose = document.querySelector(".popup-wrapper--request .popup__close");

    requestButton.addEventListener("click", function () {
        requestPopup.classList.add("popup-wrapper--show");
    });
    requestClose.addEventListener("click", function () {
        requestPopup.classList.remove("popup-wrapper--show");
    });



})();