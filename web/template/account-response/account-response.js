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



    // Показать списки откликов

    var toggleNew = document.querySelector(".response__toggle-list--new");
    var listNew = document.querySelector(".response__items--new");

    toggleNew.addEventListener("click", function () {
        if(listNew.classList.contains("response__items--hide")) {
            listNew.classList.remove("response__items--hide");
            toggleNew.classList.remove("response__toggle-list--show");
        }
        else {
            listNew.classList.add("response__items--hide");
            toggleNew.classList.add("response__toggle-list--show");
        }
    });

    var toggleAccept = document.querySelector(".response__toggle-list--accept");
    var listAccept = document.querySelector(".response__items--accept");

    toggleAccept.addEventListener("click", function () {
        if(listAccept.classList.contains("response__items--hide")) {
            listAccept.classList.remove("response__items--hide");
            toggleAccept.classList.add("response__toggle-list--hide");
        }
        else {
            listAccept.classList.add("response__items--hide");
            toggleAccept.classList.remove("response__toggle-list--hide");
        }
    });




    var deleteButton = document.querySelectorAll(".response__delete--main");
    var deleteButtonConfirm = document.querySelectorAll(".response__delete--confirm");
    var deleteButtonCancel = document.querySelectorAll(".response__cancel");
    var deleteConfirm = document.querySelectorAll(".response__delete-confirm");
    var responseItem = document.querySelectorAll(".response__item");

    for (var i=0; i<deleteButton.length; i++) {
        (function (deleteButton, i) {
            deleteButton[i].addEventListener("click", function () {
                if (!deleteConfirm[i].classList.contains("response__delete-confirm--show")) {
                    deleteConfirm[i].classList.add("response__delete-confirm--show");
                    responseItem[i].classList.add("response__item--delete");
                }
            });
        })(deleteButton, i);
    }

    for (var i=0; i<deleteButtonConfirm.length; i++) {
        (function (deleteButtonConfirm, i) {
            deleteButtonConfirm[i].addEventListener("click", function () {
                if (deleteConfirm[i].classList.contains("response__delete-confirm--show")) {
                    deleteConfirm[i].classList.remove("response__delete-confirm--show");
                    responseItem[i].classList.remove("response__item--delete");
                }
            });
        })(deleteButtonConfirm, i);
    }

    for (var i=0; i<deleteButtonCancel.length; i++) {
        (function (deleteButtonCancel, i) {
            deleteButtonCancel[i].addEventListener("click", function () {
                if (deleteConfirm[i].classList.contains("response__delete-confirm--show")) {
                    deleteConfirm[i].classList.remove("response__delete-confirm--show");
                    responseItem[i].classList.remove("response__item--delete");
                }
            });
        })(deleteButtonCancel, i);
    }

})();