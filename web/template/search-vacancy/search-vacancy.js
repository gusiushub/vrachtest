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


    var cityHead = document.querySelector(".search__city");
    var cityBody = document.querySelector(".popup-wrapper--city");
    var cityClose = document.querySelector(".popup-wrapper--city .popup__close");

    cityHead.addEventListener("click", function () {
        cityBody.classList.add("popup-wrapper--show");
    });
    cityClose.addEventListener("click", function () {
        cityBody.classList.remove("popup-wrapper--show");
    });



    var filterHead = document.querySelector(".filter__head");
    var filterBody = document.querySelector(".filter");

    filterHead.addEventListener("click", function () {
        if (!filterBody.classList.contains("filter--show")) {
            filterBody.classList.add("filter--show");
            filterHead.classList.add("filter__head--show");
        }
        else {
            filterBody.classList.remove("filter--show");
            filterHead.classList.remove("filter__head--show");
        }
    });






})();