<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Главная страница';
?>
<section class="banner">
    <div class="container">
        <div class="banner__header">
            Профессиональные услуги <br>
            <span>Медсестёр и массажистов</span> <br>
            на дому и в клинике
        </div>
        <div class="banner__text">
            Выберите понравившегося медицинского специалиста <br>из базы более 2 000 медсестёр и массажистов
        </div>
    </div>
</section>


<section class="top-specialists">
    <div class="top-specialists__header">Топ специалисты</div>
    <div class="container">
        <div class="doctor doctor--vertical">
            <div class="doctor__price">от 850 руб</div>
            <div class="doctor__photo">
                <img src="../../web/template/img/doctor--144(2).png" alt="">
            </div>
            <div class="doctor__info">
                <div class="doctor__info-wrapper">
                    <div class="doctor__name">
                        Степанова Ольга&nbsp;Владимировна
                    </div>
                    <div class="doctor__category">
                        Медсестра высшей категории
                    </div>
                    <div class="doctor__city">
                        Санкт-Петербург
                    </div>
                </div>
                <div class="doctor__info-wrapper">
                    <div class="doctor__services">
                        <span>Услуги: </span>уколы, капельницы
                    </div>
                    <div class="doctor__rating">
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z">
                            </svg>
                        </div>
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z">
                            </svg>
                        </div>
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z">
                            </svg>
                        </div>
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z">
                            </svg>
                        </div>
                        <div class="rating-star">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z">
                            </svg>
                        </div>
                    </div>
                    <a href="#" class="doctor__more">
                        Перейти к странице специалиста
                        <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L5 6L1 11" stroke="#41638A">
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="doctor doctor--vertical">
            <div class="doctor__price">от 850 руб</div>
            <div class="doctor__photo">
                <img src="../img/doctor--144(2).png" alt="">
            </div>
            <div class="doctor__info">
                <div class="doctor__info-wrapper">
                    <div class="doctor__name">
                        Степанова Ольга&nbsp;Владимировна
                    </div>
                    <div class="doctor__category">
                        Медсестра высшей категории
                    </div>
                    <div class="doctor__city">
                        Санкт-Петербург
                    </div>
                </div>
                <div class="doctor__info-wrapper">
                    <div class="doctor__services">
                        <span>Услуги: </span>уколы, капельницы
                    </div>
                    <div class="doctor__rating">
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                        <div class="rating-star">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                    </div>
                    <a href="#" class="doctor__more">
                        Перейти к странице специалиста
                        <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="doctor doctor--vertical">
            <div class="doctor__price">от 850 руб</div>
            <div class="doctor__photo">
                <img src="../img/doctor--144(2).png" alt="">
            </div>
            <div class="doctor__info">
                <div class="doctor__info-wrapper">
                    <div class="doctor__name">
                        Степанова Ольга&nbsp;Владимировна
                    </div>
                    <div class="doctor__category">
                        Медсестра высшей категории
                    </div>
                    <div class="doctor__city">
                        Санкт-Петербург
                    </div>
                </div>
                <div class="doctor__info-wrapper">
                    <div class="doctor__services">
                        <span>Услуги: </span>уколы, капельницы
                    </div>
                    <div class="doctor__rating">
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                        <div class="rating-star">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                    </div>
                    <a href="#" class="doctor__more">
                        Перейти к странице специалиста
                        <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="doctor doctor--vertical">
            <div class="doctor__price">от 850 руб</div>
            <div class="doctor__photo">
                <img src="../img/doctor--144(2).png" alt="">
            </div>
            <div class="doctor__info">
                <div class="doctor__info-wrapper">
                    <div class="doctor__name">
                        Степанова Ольга&nbsp;Владимировна
                    </div>
                    <div class="doctor__category">
                        Медсестра высшей категории
                    </div>
                    <div class="doctor__city">
                        Санкт-Петербург
                    </div>
                </div>
                <div class="doctor__info-wrapper">
                    <div class="doctor__services">
                        <span>Услуги: </span>уколы, капельницы
                    </div>
                    <div class="doctor__rating">
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                        <div class="rating-star">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                    </div>
                    <a href="#" class="doctor__more">
                        Перейти к странице специалиста
                        <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="doctor doctor--vertical">
            <div class="doctor__price">от 850 руб</div>
            <div class="doctor__photo">
                <img src="../img/doctor--144(2).png" alt="">
            </div>
            <div class="doctor__info">
                <div class="doctor__info-wrapper">
                    <div class="doctor__name">
                        Степанова Ольга&nbsp;Владимировна
                    </div>
                    <div class="doctor__category">
                        Медсестра высшей категории
                    </div>
                    <div class="doctor__city">
                        Санкт-Петербург
                    </div>
                </div>
                <div class="doctor__info-wrapper">
                    <div class="doctor__services">
                        <span>Услуги: </span>уколы, капельницы
                    </div>
                    <div class="doctor__rating">
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                        <div class="rating-star rating-star--full">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                        <div class="rating-star">
                            <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                            </svg>
                        </div>
                    </div>
                    <a href="#" class="doctor__more">
                        Перейти к странице специалиста
                        <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="top-specialists top-specialists--slider">
    <div class="top-specialists__header">Топ специалисты</div>
    <div class="container">
        <div class="top-specialists__slider-wrapper">
            <div class="top-specialists__arrow top-specialists__arrow--left">
                <svg width="27" height="51" viewBox="0 0 27 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.9565 0.527584C24.3043 0.175861 24.7391 0 25.2174 0C25.6957 0 26.1304 0.175861 26.4783 0.527584C27.1739 1.23103 27.1739 2.37414 26.4783 3.07759L4.30435 25.5L26.4783 47.9224C27.1739 48.6259 27.1739 49.769 26.4783 50.4724C25.7826 51.1759 24.6522 51.1759 23.9565 50.4724L0.52174 26.775C-0.173912 26.0716 -0.173912 24.9284 0.52174 24.225L23.9565 0.527584Z"
                          fill="black" fill-opacity="0.25"/>
                </svg>
            </div>
            <div class="top-specialists__arrow top-specialists__arrow--right">
                <svg width="27" height="51" viewBox="0 0 27 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.9565 0.527584C24.3043 0.175861 24.7391 0 25.2174 0C25.6957 0 26.1304 0.175861 26.4783 0.527584C27.1739 1.23103 27.1739 2.37414 26.4783 3.07759L4.30435 25.5L26.4783 47.9224C27.1739 48.6259 27.1739 49.769 26.4783 50.4724C25.7826 51.1759 24.6522 51.1759 23.9565 50.4724L0.52174 26.775C-0.173912 26.0716 -0.173912 24.9284 0.52174 24.225L23.9565 0.527584Z"
                          fill="black" fill-opacity="0.25"/>
                </svg>

            </div>
            <div class="top-specialists__slider">
                <div class="doctor doctor--vertical">
                    <div class="doctor__price">от 850 руб</div>
                    <div class="doctor__photo">
                        <img src="../img/doctor--144(2).png" alt="">
                    </div>
                    <div class="doctor__info">
                        <div class="doctor__info-wrapper">
                            <div class="doctor__name">
                                Степанова Ольга&nbsp;Владимировна
                            </div>
                            <div class="doctor__category">
                                Медсестра высшей категории
                            </div>
                            <div class="doctor__city">
                                Санкт-Петербург
                            </div>
                        </div>
                        <div class="doctor__info-wrapper">
                            <div class="doctor__services">
                                <span>Услуги: </span>уколы, капельницы
                            </div>
                            <div class="doctor__rating">
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                            </div>
                            <a href="#" class="doctor__more">
                                Перейти к странице специалиста
                                <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="doctor doctor--vertical">
                    <div class="doctor__price">от 850 руб</div>
                    <div class="doctor__photo">
                        <img src="../img/doctor--144(2).png" alt="">
                    </div>
                    <div class="doctor__info">
                        <div class="doctor__info-wrapper">
                            <div class="doctor__name">
                                Степанова Ольга&nbsp;Владимировна
                            </div>
                            <div class="doctor__category">
                                Медсестра высшей категории
                            </div>
                            <div class="doctor__city">
                                Санкт-Петербург
                            </div>
                        </div>
                        <div class="doctor__info-wrapper">
                            <div class="doctor__services">
                                <span>Услуги: </span>уколы, капельницы
                            </div>
                            <div class="doctor__rating">
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                            </div>
                            <a href="#" class="doctor__more">
                                Перейти к странице специалиста
                                <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="doctor doctor--vertical">
                    <div class="doctor__price">от 850 руб</div>
                    <div class="doctor__photo">
                        <img src="../img/doctor--144(2).png" alt="">
                    </div>
                    <div class="doctor__info">
                        <div class="doctor__info-wrapper">
                            <div class="doctor__name">
                                Степанова Ольга&nbsp;Владимировна
                            </div>
                            <div class="doctor__category">
                                Медсестра высшей категории
                            </div>
                            <div class="doctor__city">
                                Санкт-Петербург
                            </div>
                        </div>
                        <div class="doctor__info-wrapper">
                            <div class="doctor__services">
                                <span>Услуги: </span>уколы, капельницы
                            </div>
                            <div class="doctor__rating">
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                            </div>
                            <a href="#" class="doctor__more">
                                Перейти к странице специалиста
                                <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="doctor doctor--vertical">
                    <div class="doctor__price">от 850 руб</div>
                    <div class="doctor__photo">
                        <img src="../img/doctor--144(2).png" alt="">
                    </div>
                    <div class="doctor__info">
                        <div class="doctor__info-wrapper">
                            <div class="doctor__name">
                                Степанова Ольга&nbsp;Владимировна
                            </div>
                            <div class="doctor__category">
                                Медсестра высшей категории
                            </div>
                            <div class="doctor__city">
                                Санкт-Петербург
                            </div>
                        </div>
                        <div class="doctor__info-wrapper">
                            <div class="doctor__services">
                                <span>Услуги: </span>уколы, капельницы
                            </div>
                            <div class="doctor__rating">
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                            </div>
                            <a href="#" class="doctor__more">
                                Перейти к странице специалиста
                                <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="doctor doctor--vertical">
                    <div class="doctor__price">от 850 руб</div>
                    <div class="doctor__photo">
                        <img src="../img/doctor--144(2).png" alt="">
                    </div>
                    <div class="doctor__info">
                        <div class="doctor__info-wrapper">
                            <div class="doctor__name">
                                Степанова Ольга&nbsp;Владимировна
                            </div>
                            <div class="doctor__category">
                                Медсестра высшей категории
                            </div>
                            <div class="doctor__city">
                                Санкт-Петербург
                            </div>
                        </div>
                        <div class="doctor__info-wrapper">
                            <div class="doctor__services">
                                <span>Услуги: </span>уколы, капельницы
                            </div>
                            <div class="doctor__rating">
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star rating-star--full">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                                <div class="rating-star">
                                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                    </svg>
                                </div>
                            </div>
                            <a href="#" class="doctor__more">
                                Перейти к странице специалиста
                                <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="search-specialist">
    <div class="container">

        <div class="search-specialist__form">

            <div class="search-specialist__header">
                <div class="search-specialist__tabs">
                    <div class="search-specialist__tabs-item search-specialist__tabs-item--active">Медсестра на дому</div>
                    <div class="search-specialist__tabs-item">Массажист на дому</div>
                </div>
                <div class="search-specialist__tabs search-specialist__tabs--mobile">
                    <div class="search-specialist__tabs-item search-specialist__tabs-item--active">Медсёстры</div>
                    <div class="search-specialist__tabs-item">Массажисты</div>
                </div>
            </div>

            <div class="search-specialist__address">
                <div class="search-specialist__address-wrapper search-specialist__address-wrapper--flex">
                    <div class="select__new-caret select__new-caret--city">
                        <select id="select-city" class="input input--select input--city" name="">
                            <option value="Город">Город</option>
                            <option value="Киев">Киев</option>
                            <option value="Одесса">Одесса</option>
                            <option value="Москва">Москва</option>
                            <option value="Санкт-Петербург">Санкт-Петербург</option>
                        </select>
                    </div>
                    <div class="select__new-caret select__new-caret--district">
                        <select id="select-district" class="input input--select input--city" name="">
                            <option value="Город">Район</option>
                            <option value="Киев">Киевский</option>
                            <option value="Одесса">Приморский</option>
                            <option value="Москва">Таирово</option>
                            <option value="Санкт-Петербург">Котовского</option>
                        </select>
                    </div>
                    <div class="select__new-caret select__new-caret--metro">
                        <select id="select-metro" class="input input--select input--city" name="">
                            <option value="Город">Метро</option>
                            <option value="Киев">Вокзал</option>
                            <option value="Одесса">Пересыпь</option>
                            <option value="Москва">4-ая Фонтана</option>
                            <option value="Санкт-Петербург">Вузовский</option>
                        </select>
                    </div>
                </div>
                <div class="search-specialist__address-wrapper">
                    <input id="street" type="text" class="input" placeholder="Улица">
                </div>
            </div>

            <div class="search-specialist__info-wrapper">

                <div class="search-specialist__where">
                    <div class="search-specialist__question">Где вы хотите получить услуги?</div>
                    <div class="select__new-caret select__new-caret--city">
                        <select id="select-place" class="input input--select input--city" name="">
                            <option value="Город">На дому</option>
                            <option value="Киев">В больнице</option>
                            <option value="Одесса">На улице</option>
                        </select>
                    </div>
                </div>

                <div class="search-specialist__services">
                    <div class="search-specialist__question search-specialist__question--services">Выберите интересующие услуги:</div>

                    <div class="search-specialist__services-wrapper-mobile">
                        <div class="select__new-caret select__new-caret--services">
                            Открыть список
                        </div>
                        <div class="search-specialist__services-wrapper">
                            <div class="search-specialist__services-item">
                                <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                                       placeholder="Россия">
                                <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                            </div>
                            <div class="search-specialist__services-item">
                                <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                                       placeholder="Россия">
                                <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                            </div>
                            <div class="search-specialist__services-item">
                                <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                                       placeholder="Россия">
                                <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                            </div>
                            <div class="search-specialist__services-item">
                                <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                                       placeholder="Россия">
                                <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                            </div>
                            <div class="search-specialist__services-item">
                                <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                                       placeholder="Россия">
                                <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                            </div>
                            <div class="search-specialist__services-item">
                                <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                                       placeholder="Россия">
                                <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                            </div>
                            <div class="search-specialist__services-item">
                                <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                                       placeholder="Россия">
                                <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                            </div>
                            <div class="search-specialist__services-item">
                                <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                                       placeholder="Россия">
                                <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                            </div>
                            <div class="search-specialist__services-item">
                                <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                                       placeholder="Россия">
                                <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                            </div>
                            <div class="search-specialist__services-item">
                                <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                                       placeholder="Россия">
                                <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                            </div>
                            <div class="search-specialist__services-item">
                                <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                                       placeholder="Россия">
                                <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                            </div>
                            <div class="search-specialist__services-item">
                                <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                                       placeholder="Россия">
                                <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                            </div>
                            <div class="search-specialist__services-item">
                                <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                                       placeholder="Россия">
                                <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                            </div>
                            <div class="search-specialist__services-item">
                                <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                                       placeholder="Россия">
                                <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                            </div>
                        </div>
                    </div>


                    <div class="search-specialist__services-item">
                        <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                               placeholder="Россия">
                        <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                    </div>
                    <div class="search-specialist__services-item">
                        <input id="russia2" type="checkbox" class="input input--checkbox input--checkbox-round"
                               placeholder="Россия">
                        <label for="russia2" class="label label--checkbox label--checkbox-round">Россия</label>
                    </div>
                    <div class="search-specialist__services-item">
                        <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                               placeholder="Россия">
                        <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                    </div>
                    <div class="search-specialist__services-item">
                        <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                               placeholder="Россия">
                        <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                    </div>
                    <div class="search-specialist__services-item">
                        <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                               placeholder="Россия">
                        <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                    </div>
                    <div class="search-specialist__services-item">
                        <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                               placeholder="Россия">
                        <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                    </div>
                    <div class="search-specialist__services-item">
                        <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                               placeholder="Россия">
                        <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                    </div>
                    <div class="search-specialist__services-item">
                        <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                               placeholder="Россия">
                        <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                    </div>
                    <div class="search-specialist__services-item">
                        <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                               placeholder="Россия">
                        <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                    </div>
                    <div class="search-specialist__services-item">
                        <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                               placeholder="Россия">
                        <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                    </div>
                    <div class="search-specialist__services-item">
                        <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                               placeholder="Россия">
                        <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                    </div>
                    <div class="search-specialist__services-item">
                        <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                               placeholder="Россия">
                        <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                    </div>
                    <div class="search-specialist__services-item">
                        <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                               placeholder="Россия">
                        <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                    </div>
                    <div class="search-specialist__services-item">
                        <input id="russia" type="checkbox" class="input input--checkbox input--checkbox-round"
                               placeholder="Россия">
                        <label for="russia" class="label label--checkbox label--checkbox-round">Россия</label>
                    </div>
                </div>

                <div class="search-specialist__submit">
                    <input id="show-on-map" type="checkbox" class="input input--checkbox input--checkbox-round"
                           placeholder="Россия">
                    <label for="show-on-map" class="label label--checkbox label--checkbox-round">Показать на
                        карте</label>

                    <button type="submit" class="button button--save">Найти</button>
                </div>

            </div>

        </div>

        <div class="top-sidebar">
            <div class="top-sidebar__header">Топ специалисты</div>
            <div class="top-sidebar__add">
                <span>+ </span>
                Разместить здесь объявление
            </div>
            <div class="doctor doctor--small">
                <div class="doctor__price">от 850 руб</div>
                <div class="doctor__photo">
                    <img src="../img/doctor--108(2).png" alt="">
                </div>
                <div class="doctor__info">
                    <div class="doctor__info-wrapper">
                        <div class="doctor__name">
                            Степанова Ольга&nbsp;Владимировна
                        </div>
                        <div class="doctor__category">
                            Медсестра высшей категории
                        </div>
                        <div class="doctor__city">
                            Санкт-Петербург
                        </div>
                    </div>
                    <div class="doctor__info-wrapper">
                        <div class="doctor__services">
                            <span>Услуги: </span>уколы, капельницы
                        </div>
                        <div class="doctor__rating">
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                        </div>
                        <a href="#" class="doctor__more">
                            Перейти к странице специалиста
                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
            <div class="doctor doctor--small">
                <div class="doctor__price">от 850 руб</div>
                <div class="doctor__photo">
                    <img src="../img/doctor--108(2).png" alt="">
                </div>
                <div class="doctor__info">
                    <div class="doctor__info-wrapper">
                        <div class="doctor__name">
                            Степанова Ольга&nbsp;Владимировна
                        </div>
                        <div class="doctor__category">
                            Медсестра высшей категории
                        </div>
                        <div class="doctor__city">
                            Санкт-Петербург
                        </div>
                    </div>
                    <div class="doctor__info-wrapper">
                        <div class="doctor__services">
                            <span>Услуги: </span>уколы, капельницы
                        </div>
                        <div class="doctor__rating">
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                        </div>
                        <a href="#" class="doctor__more">
                            Перейти к странице специалиста
                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
            <div class="doctor doctor--small">
                <div class="doctor__price">от 850 руб</div>
                <div class="doctor__photo">
                    <img src="../img/doctor--108(2).png" alt="">
                </div>
                <div class="doctor__info">
                    <div class="doctor__info-wrapper">
                        <div class="doctor__name">
                            Степанова Ольга&nbsp;Владимировна
                        </div>
                        <div class="doctor__category">
                            Медсестра высшей категории
                        </div>
                        <div class="doctor__city">
                            Санкт-Петербург
                        </div>
                    </div>
                    <div class="doctor__info-wrapper">
                        <div class="doctor__services">
                            <span>Услуги: </span>уколы, капельницы
                        </div>
                        <div class="doctor__rating">
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                        </div>
                        <a href="#" class="doctor__more">
                            Перейти к странице специалиста
                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
            <div class="doctor doctor--small">
                <div class="doctor__price">от 850 руб</div>
                <div class="doctor__photo">
                    <img src="../img/doctor--108(2).png" alt="">
                </div>
                <div class="doctor__info">
                    <div class="doctor__info-wrapper">
                        <div class="doctor__name">
                            Степанова Ольга&nbsp;Владимировна
                        </div>
                        <div class="doctor__category">
                            Медсестра высшей категории
                        </div>
                        <div class="doctor__city">
                            Санкт-Петербург
                        </div>
                    </div>
                    <div class="doctor__info-wrapper">
                        <div class="doctor__services">
                            <span>Услуги: </span>уколы, капельницы
                        </div>
                        <div class="doctor__rating">
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                        </div>
                        <a href="#" class="doctor__more">
                            Перейти к странице специалиста
                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
            <div class="doctor doctor--small">
                <div class="doctor__price">от 850 руб</div>
                <div class="doctor__photo">
                    <img src="../img/doctor--108(2).png" alt="">
                </div>
                <div class="doctor__info">
                    <div class="doctor__info-wrapper">
                        <div class="doctor__name">
                            Степанова Ольга&nbsp;Владимировна
                        </div>
                        <div class="doctor__category">
                            Медсестра высшей категории
                        </div>
                        <div class="doctor__city">
                            Санкт-Петербург
                        </div>
                    </div>
                    <div class="doctor__info-wrapper">
                        <div class="doctor__services">
                            <span>Услуги: </span>уколы, капельницы
                        </div>
                        <div class="doctor__rating">
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                        </div>
                        <a href="#" class="doctor__more">
                            Перейти к странице специалиста
                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
            <div class="doctor doctor--small">
                <div class="doctor__price">от 850 руб</div>
                <div class="doctor__photo">
                    <img src="../img/doctor--108(2).png" alt="">
                </div>
                <div class="doctor__info">
                    <div class="doctor__info-wrapper">
                        <div class="doctor__name">
                            Степанова Ольга&nbsp;Владимировна
                        </div>
                        <div class="doctor__category">
                            Медсестра высшей категории
                        </div>
                        <div class="doctor__city">
                            Санкт-Петербург
                        </div>
                    </div>
                    <div class="doctor__info-wrapper">
                        <div class="doctor__services">
                            <span>Услуги: </span>уколы, капельницы
                        </div>
                        <div class="doctor__rating">
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star rating-star--full">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                            <div class="rating-star">
                                <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                </svg>
                            </div>
                        </div>
                        <a href="#" class="doctor__more">
                            Перейти к странице специалиста
                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="results">

    <div class="results__item">
        <div class="container">
            <div class="results__header">
                <div class="results__name">Медсёстры</div>
                <a href="#" class="results__more">Всего 789<span> специалистов</span></a>
            </div>
            <div class="results__profiles">
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../../web/template/img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../../web/template/img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../../web/template/img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="results__profiles results__profiles--slider results__profiles--slider-nurse">

            <div class="results__slider-wrapper">
                <div class="results__arrow results__arrow--left">
                    <svg width="27" height="51" viewBox="0 0 27 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.9565 0.527584C24.3043 0.175861 24.7391 0 25.2174 0C25.6957 0 26.1304 0.175861 26.4783 0.527584C27.1739 1.23103 27.1739 2.37414 26.4783 3.07759L4.30435 25.5L26.4783 47.9224C27.1739 48.6259 27.1739 49.769 26.4783 50.4724C25.7826 51.1759 24.6522 51.1759 23.9565 50.4724L0.52174 26.775C-0.173912 26.0716 -0.173912 24.9284 0.52174 24.225L23.9565 0.527584Z"
                              fill="black" fill-opacity="0.25"/>
                    </svg>
                </div>
                <div class="results__arrow results__arrow--right">
                    <svg width="27" height="51" viewBox="0 0 27 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.9565 0.527584C24.3043 0.175861 24.7391 0 25.2174 0C25.6957 0 26.1304 0.175861 26.4783 0.527584C27.1739 1.23103 27.1739 2.37414 26.4783 3.07759L4.30435 25.5L26.4783 47.9224C27.1739 48.6259 27.1739 49.769 26.4783 50.4724C25.7826 51.1759 24.6522 51.1759 23.9565 50.4724L0.52174 26.775C-0.173912 26.0716 -0.173912 24.9284 0.52174 24.225L23.9565 0.527584Z"
                              fill="black" fill-opacity="0.25"/>
                    </svg>
                </div>
                <div class="results__slider">
                    <div class="results__profiles-wrapper">
                        <div class="doctor doctor--vertical">
                            <div class="doctor__price">от 850 руб</div>
                            <div class="doctor__photo">
                                <img src="../img/doctor--144(2).png" alt="">
                            </div>
                            <div class="doctor__info">
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__name">
                                        Степанова Ольга&nbsp;Владимировна
                                    </div>
                                    <div class="doctor__category">
                                        Медсестра высшей категории
                                    </div>
                                    <div class="doctor__city">
                                        Санкт-Петербург
                                    </div>
                                </div>
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__services">
                                        <span>Услуги: </span>уколы, капельницы
                                    </div>
                                    <div class="doctor__rating">
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <a href="#" class="doctor__more">
                                        Перейти к странице специалиста
                                        <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="results__profiles-wrapper">
                        <div class="doctor doctor--vertical">
                            <div class="doctor__price">от 850 руб</div>
                            <div class="doctor__photo">
                                <img src="../img/doctor--144(2).png" alt="">
                            </div>
                            <div class="doctor__info">
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__name">
                                        Степанова Ольга&nbsp;Владимировна
                                    </div>
                                    <div class="doctor__category">
                                        Медсестра высшей категории
                                    </div>
                                    <div class="doctor__city">
                                        Санкт-Петербург
                                    </div>
                                </div>
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__services">
                                        <span>Услуги: </span>уколы, капельницы
                                    </div>
                                    <div class="doctor__rating">
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <a href="#" class="doctor__more">
                                        Перейти к странице специалиста
                                        <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="results__profiles-wrapper">
                        <div class="doctor doctor--vertical">
                            <div class="doctor__price">от 850 руб</div>
                            <div class="doctor__photo">
                                <img src="../img/doctor--144(2).png" alt="">
                            </div>
                            <div class="doctor__info">
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__name">
                                        Степанова Ольга&nbsp;Владимировна
                                    </div>
                                    <div class="doctor__category">
                                        Медсестра высшей категории
                                    </div>
                                    <div class="doctor__city">
                                        Санкт-Петербург
                                    </div>
                                </div>
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__services">
                                        <span>Услуги: </span>уколы, капельницы
                                    </div>
                                    <div class="doctor__rating">
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <a href="#" class="doctor__more">
                                        Перейти к странице специалиста
                                        <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="results__profiles-wrapper">
                        <div class="doctor doctor--vertical">
                            <div class="doctor__price">от 850 руб</div>
                            <div class="doctor__photo">
                                <img src="../img/doctor--144(2).png" alt="">
                            </div>
                            <div class="doctor__info">
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__name">
                                        Степанова Ольга&nbsp;Владимировна
                                    </div>
                                    <div class="doctor__category">
                                        Медсестра высшей категории
                                    </div>
                                    <div class="doctor__city">
                                        Санкт-Петербург
                                    </div>
                                </div>
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__services">
                                        <span>Услуги: </span>уколы, капельницы
                                    </div>
                                    <div class="doctor__rating">
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <a href="#" class="doctor__more">
                                        Перейти к странице специалиста
                                        <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="results__profiles-wrapper">
                        <div class="doctor doctor--vertical">
                            <div class="doctor__price">от 850 руб</div>
                            <div class="doctor__photo">
                                <img src="../img/doctor--144(2).png" alt="">
                            </div>
                            <div class="doctor__info">
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__name">
                                        Степанова Ольга&nbsp;Владимировна
                                    </div>
                                    <div class="doctor__category">
                                        Медсестра высшей категории
                                    </div>
                                    <div class="doctor__city">
                                        Санкт-Петербург
                                    </div>
                                </div>
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__services">
                                        <span>Услуги: </span>уколы, капельницы
                                    </div>
                                    <div class="doctor__rating">
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <a href="#" class="doctor__more">
                                        Перейти к странице специалиста
                                        <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="results__profiles-wrapper">
                        <div class="doctor doctor--vertical">
                            <div class="doctor__price">от 850 руб</div>
                            <div class="doctor__photo">
                                <img src="../img/doctor--144(2).png" alt="">
                            </div>
                            <div class="doctor__info">
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__name">
                                        Степанова Ольга&nbsp;Владимировна
                                    </div>
                                    <div class="doctor__category">
                                        Медсестра высшей категории
                                    </div>
                                    <div class="doctor__city">
                                        Санкт-Петербург
                                    </div>
                                </div>
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__services">
                                        <span>Услуги: </span>уколы, капельницы
                                    </div>
                                    <div class="doctor__rating">
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <a href="#" class="doctor__more">
                                        Перейти к странице специалиста
                                        <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="results__profiles-wrapper">
                        <div class="doctor doctor--vertical">
                            <div class="doctor__price">от 850 руб</div>
                            <div class="doctor__photo">
                                <img src="../img/doctor--144(2).png" alt="">
                            </div>
                            <div class="doctor__info">
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__name">
                                        Степанова Ольга&nbsp;Владимировна
                                    </div>
                                    <div class="doctor__category">
                                        Медсестра высшей категории
                                    </div>
                                    <div class="doctor__city">
                                        Санкт-Петербург
                                    </div>
                                </div>
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__services">
                                        <span>Услуги: </span>уколы, капельницы
                                    </div>
                                    <div class="doctor__rating">
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <a href="#" class="doctor__more">
                                        Перейти к странице специалиста
                                        <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="results__profiles-wrapper">
                        <div class="doctor doctor--vertical">
                            <div class="doctor__price">от 850 руб</div>
                            <div class="doctor__photo">
                                <img src="../img/doctor--144(2).png" alt="">
                            </div>
                            <div class="doctor__info">
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__name">
                                        Степанова Ольга&nbsp;Владимировна
                                    </div>
                                    <div class="doctor__category">
                                        Медсестра высшей категории
                                    </div>
                                    <div class="doctor__city">
                                        Санкт-Петербург
                                    </div>
                                </div>
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__services">
                                        <span>Услуги: </span>уколы, капельницы
                                    </div>
                                    <div class="doctor__rating">
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <a href="#" class="doctor__more">
                                        Перейти к странице специалиста
                                        <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="results__profiles-wrapper">
                        <div class="doctor doctor--vertical">
                            <div class="doctor__price">от 850 руб</div>
                            <div class="doctor__photo">
                                <img src="../img/doctor--144(2).png" alt="">
                            </div>
                            <div class="doctor__info">
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__name">
                                        Степанова Ольга&nbsp;Владимировна
                                    </div>
                                    <div class="doctor__category">
                                        Медсестра высшей категории
                                    </div>
                                    <div class="doctor__city">
                                        Санкт-Петербург
                                    </div>
                                </div>
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__services">
                                        <span>Услуги: </span>уколы, капельницы
                                    </div>
                                    <div class="doctor__rating">
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <a href="#" class="doctor__more">
                                        Перейти к странице специалиста
                                        <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="results__profiles-wrapper">
                        <div class="doctor doctor--vertical">
                            <div class="doctor__price">от 850 руб</div>
                            <div class="doctor__photo">
                                <img src="../img/doctor--144(2).png" alt="">
                            </div>
                            <div class="doctor__info">
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__name">
                                        Степанова Ольга&nbsp;Владимировна
                                    </div>
                                    <div class="doctor__category">
                                        Медсестра высшей категории
                                    </div>
                                    <div class="doctor__city">
                                        Санкт-Петербург
                                    </div>
                                </div>
                                <div class="doctor__info-wrapper">
                                    <div class="doctor__services">
                                        <span>Услуги: </span>уколы, капельницы
                                    </div>
                                    <div class="doctor__rating">
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star rating-star--full">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="rating-star">
                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <a href="#" class="doctor__more">
                                        Перейти к странице специалиста
                                        <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="results__item">
        <div class="container">
            <div class="results__header">
                <div class="results__name">Массажисты</div>
                <a href="#" class="results__more">Всего 932<span> специалистов</span></a>
            </div>
            <div class="results__profiles">
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results__profiles-wrapper">
                    <div class="doctor doctor--vertical">
                        <div class="doctor__price">от 850 руб</div>
                        <div class="doctor__photo">
                            <img src="../img/doctor--144(2).png" alt="">
                        </div>
                        <div class="doctor__info">
                            <div class="doctor__info-wrapper">
                                <div class="doctor__name">
                                    Степанова Ольга&nbsp;Владимировна
                                </div>
                                <div class="doctor__category">
                                    Медсестра высшей категории
                                </div>
                                <div class="doctor__city">
                                    Санкт-Петербург
                                </div>
                            </div>
                            <div class="doctor__info-wrapper">
                                <div class="doctor__services">
                                    <span>Услуги: </span>уколы, капельницы
                                </div>
                                <div class="doctor__rating">
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star rating-star--full">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="rating-star">
                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="#" class="doctor__more">
                                    Перейти к странице специалиста
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="results__profiles results__profiles--slider results__profiles--slider-masseur">

                <div class="results__slider-wrapper">
                    <div class="results__arrow results__arrow--left">
                        <svg width="27" height="51" viewBox="0 0 27 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.9565 0.527584C24.3043 0.175861 24.7391 0 25.2174 0C25.6957 0 26.1304 0.175861 26.4783 0.527584C27.1739 1.23103 27.1739 2.37414 26.4783 3.07759L4.30435 25.5L26.4783 47.9224C27.1739 48.6259 27.1739 49.769 26.4783 50.4724C25.7826 51.1759 24.6522 51.1759 23.9565 50.4724L0.52174 26.775C-0.173912 26.0716 -0.173912 24.9284 0.52174 24.225L23.9565 0.527584Z"
                                  fill="black" fill-opacity="0.25"/>
                        </svg>
                    </div>
                    <div class="results__arrow results__arrow--right">
                        <svg width="27" height="51" viewBox="0 0 27 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.9565 0.527584C24.3043 0.175861 24.7391 0 25.2174 0C25.6957 0 26.1304 0.175861 26.4783 0.527584C27.1739 1.23103 27.1739 2.37414 26.4783 3.07759L4.30435 25.5L26.4783 47.9224C27.1739 48.6259 27.1739 49.769 26.4783 50.4724C25.7826 51.1759 24.6522 51.1759 23.9565 50.4724L0.52174 26.775C-0.173912 26.0716 -0.173912 24.9284 0.52174 24.225L23.9565 0.527584Z"
                                  fill="black" fill-opacity="0.25"/>
                        </svg>
                    </div>
                    <div class="results__slider">
                        <div class="results__profiles-wrapper">
                            <div class="doctor doctor--vertical">
                                <div class="doctor__price">от 850 руб</div>
                                <div class="doctor__photo">
                                    <img src="../img/doctor--144(2).png" alt="">
                                </div>
                                <div class="doctor__info">
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__name">
                                            Степанова Ольга&nbsp;Владимировна
                                        </div>
                                        <div class="doctor__category">
                                            Медсестра высшей категории
                                        </div>
                                        <div class="doctor__city">
                                            Санкт-Петербург
                                        </div>
                                    </div>
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__services">
                                            <span>Услуги: </span>уколы, капельницы
                                        </div>
                                        <div class="doctor__rating">
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="#" class="doctor__more">
                                            Перейти к странице специалиста
                                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="results__profiles-wrapper">
                            <div class="doctor doctor--vertical">
                                <div class="doctor__price">от 850 руб</div>
                                <div class="doctor__photo">
                                    <img src="../img/doctor--144(2).png" alt="">
                                </div>
                                <div class="doctor__info">
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__name">
                                            Степанова Ольга&nbsp;Владимировна
                                        </div>
                                        <div class="doctor__category">
                                            Медсестра высшей категории
                                        </div>
                                        <div class="doctor__city">
                                            Санкт-Петербург
                                        </div>
                                    </div>
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__services">
                                            <span>Услуги: </span>уколы, капельницы
                                        </div>
                                        <div class="doctor__rating">
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="#" class="doctor__more">
                                            Перейти к странице специалиста
                                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="results__profiles-wrapper">
                            <div class="doctor doctor--vertical">
                                <div class="doctor__price">от 850 руб</div>
                                <div class="doctor__photo">
                                    <img src="../img/doctor--144(2).png" alt="">
                                </div>
                                <div class="doctor__info">
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__name">
                                            Степанова Ольга&nbsp;Владимировна
                                        </div>
                                        <div class="doctor__category">
                                            Медсестра высшей категории
                                        </div>
                                        <div class="doctor__city">
                                            Санкт-Петербург
                                        </div>
                                    </div>
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__services">
                                            <span>Услуги: </span>уколы, капельницы
                                        </div>
                                        <div class="doctor__rating">
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="#" class="doctor__more">
                                            Перейти к странице специалиста
                                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="results__profiles-wrapper">
                            <div class="doctor doctor--vertical">
                                <div class="doctor__price">от 850 руб</div>
                                <div class="doctor__photo">
                                    <img src="../img/doctor--144(2).png" alt="">
                                </div>
                                <div class="doctor__info">
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__name">
                                            Степанова Ольга&nbsp;Владимировна
                                        </div>
                                        <div class="doctor__category">
                                            Медсестра высшей категории
                                        </div>
                                        <div class="doctor__city">
                                            Санкт-Петербург
                                        </div>
                                    </div>
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__services">
                                            <span>Услуги: </span>уколы, капельницы
                                        </div>
                                        <div class="doctor__rating">
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="#" class="doctor__more">
                                            Перейти к странице специалиста
                                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="results__profiles-wrapper">
                            <div class="doctor doctor--vertical">
                                <div class="doctor__price">от 850 руб</div>
                                <div class="doctor__photo">
                                    <img src="../img/doctor--144(2).png" alt="">
                                </div>
                                <div class="doctor__info">
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__name">
                                            Степанова Ольга&nbsp;Владимировна
                                        </div>
                                        <div class="doctor__category">
                                            Медсестра высшей категории
                                        </div>
                                        <div class="doctor__city">
                                            Санкт-Петербург
                                        </div>
                                    </div>
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__services">
                                            <span>Услуги: </span>уколы, капельницы
                                        </div>
                                        <div class="doctor__rating">
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="#" class="doctor__more">
                                            Перейти к странице специалиста
                                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="results__profiles-wrapper">
                            <div class="doctor doctor--vertical">
                                <div class="doctor__price">от 850 руб</div>
                                <div class="doctor__photo">
                                    <img src="../img/doctor--144(2).png" alt="">
                                </div>
                                <div class="doctor__info">
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__name">
                                            Степанова Ольга&nbsp;Владимировна
                                        </div>
                                        <div class="doctor__category">
                                            Медсестра высшей категории
                                        </div>
                                        <div class="doctor__city">
                                            Санкт-Петербург
                                        </div>
                                    </div>
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__services">
                                            <span>Услуги: </span>уколы, капельницы
                                        </div>
                                        <div class="doctor__rating">
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="#" class="doctor__more">
                                            Перейти к странице специалиста
                                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="results__profiles-wrapper">
                            <div class="doctor doctor--vertical">
                                <div class="doctor__price">от 850 руб</div>
                                <div class="doctor__photo">
                                    <img src="../img/doctor--144(2).png" alt="">
                                </div>
                                <div class="doctor__info">
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__name">
                                            Степанова Ольга&nbsp;Владимировна
                                        </div>
                                        <div class="doctor__category">
                                            Медсестра высшей категории
                                        </div>
                                        <div class="doctor__city">
                                            Санкт-Петербург
                                        </div>
                                    </div>
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__services">
                                            <span>Услуги: </span>уколы, капельницы
                                        </div>
                                        <div class="doctor__rating">
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="#" class="doctor__more">
                                            Перейти к странице специалиста
                                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="results__profiles-wrapper">
                            <div class="doctor doctor--vertical">
                                <div class="doctor__price">от 850 руб</div>
                                <div class="doctor__photo">
                                    <img src="../img/doctor--144(2).png" alt="">
                                </div>
                                <div class="doctor__info">
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__name">
                                            Степанова Ольга&nbsp;Владимировна
                                        </div>
                                        <div class="doctor__category">
                                            Медсестра высшей категории
                                        </div>
                                        <div class="doctor__city">
                                            Санкт-Петербург
                                        </div>
                                    </div>
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__services">
                                            <span>Услуги: </span>уколы, капельницы
                                        </div>
                                        <div class="doctor__rating">
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="#" class="doctor__more">
                                            Перейти к странице специалиста
                                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="results__profiles-wrapper">
                            <div class="doctor doctor--vertical">
                                <div class="doctor__price">от 850 руб</div>
                                <div class="doctor__photo">
                                    <img src="../img/doctor--144(2).png" alt="">
                                </div>
                                <div class="doctor__info">
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__name">
                                            Степанова Ольга&nbsp;Владимировна
                                        </div>
                                        <div class="doctor__category">
                                            Медсестра высшей категории
                                        </div>
                                        <div class="doctor__city">
                                            Санкт-Петербург
                                        </div>
                                    </div>
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__services">
                                            <span>Услуги: </span>уколы, капельницы
                                        </div>
                                        <div class="doctor__rating">
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="#" class="doctor__more">
                                            Перейти к странице специалиста
                                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="results__profiles-wrapper">
                            <div class="doctor doctor--vertical">
                                <div class="doctor__price">от 850 руб</div>
                                <div class="doctor__photo">
                                    <img src="../../web/template/img/doctor--144(2).png" alt="">
                                </div>
                                <div class="doctor__info">
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__name">
                                            Степанова Ольга&nbsp;Владимировна
                                        </div>
                                        <div class="doctor__category">
                                            Медсестра высшей категории
                                        </div>
                                        <div class="doctor__city">
                                            Санкт-Петербург
                                        </div>
                                    </div>
                                    <div class="doctor__info-wrapper">
                                        <div class="doctor__services">
                                            <span>Услуги: </span>уколы, капельницы
                                        </div>
                                        <div class="doctor__rating">
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star rating-star--full">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                            <div class="rating-star">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="#" class="doctor__more">
                                            Перейти к странице специалиста
                                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L5 6L1 11" stroke="#41638A"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<section class="why">
    <div class="container">
        <div class="why__info">
            <div class="why__header">Почему с нами комфортно и удобно?</div>
            <div class="why__text">
                Здесь надо написать небольшой текст о сайте, услугах, выгодах и преимуществах. Очень полезно для SEO.

                This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis
                sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a
                odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent
                taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.

                Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.
                Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam,
                ut aliquam massa nisl quis neque. Suspendisse in orci enim.

                This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis
                sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a
                odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor.
                <div class="why__shadow"></div>
            </div>
            <div class="why__more">Читать далее</div>
        </div>
    </div>
</section>


<section class="posts">
    <div class="container">
        <div class="posts__header">Последние статьи</div>
        <div class="posts__wrapper">
            <div class="news news--vertical">
                <div class="news__wrapper">
                    <div class="news__photo">
                        <img src="../img/post--180(2).png" alt="" class="news__img">
                    </div>
                    <div class="news__border"></div>
                    <div class="news__info">
                        <div class="news__header">Уколы на дому</div>
                        <div class="news__date">01.06.2018</div>
                        <div class="news__text">
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ...
                        </div>
                        <a href="#" class="news__more">
                            Читать дальше
                            <svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"
                                      fill="#41638A">
                            </svg>
                        </a>
                    </div>
                </div>
                <a href="#" class="news__more news__more--outside">
                    Читать дальше
                    <svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"
                              fill="#41638A"/>
                    </svg>
                </a>
            </div>
            <div class="news news--vertical">
                <div class="news__wrapper">
                    <div class="news__photo">
                        <img src="../img/post--180(2).png" alt="" class="news__img">
                    </div>
                    <div class="news__border"></div>
                    <div class="news__info">
                        <div class="news__header">Уколы на дому</div>
                        <div class="news__date">01.06.2018</div>
                        <div class="news__text">
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ...
                        </div>
                        <a href="#" class="news__more">
                            Читать дальше
                            <svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"
                                      fill="#41638A"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <a href="#" class="news__more news__more--outside">
                    Читать дальше
                    <svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"
                              fill="#41638A">
                    </svg>
                </a>
            </div>
            <div class="news news--vertical">
                <div class="news__wrapper">
                    <div class="news__photo">
                        <img src="../img/post--180(2).png" alt="" class="news__img">
                    </div>
                    <div class="news__border"></div>
                    <div class="news__info">
                        <div class="news__header">Уколы на дому</div>
                        <div class="news__date">01.06.2018</div>
                        <div class="news__text">
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ...
                        </div>
                        <a href="#" class="news__more">
                            Читать дальше
                            <svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"
                                      fill="#41638A">
                            </svg>
                        </a>
                    </div>
                </div>
                <a href="#" class="news__more news__more--outside">
                    Читать дальше
                    <svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"
                              fill="#41638A"/>
                    </svg>
                </a>
            </div>
            <div class="news news--vertical">
                <div class="news__wrapper">
                    <div class="news__photo">
                        <img src="../img/post--180(2).png" alt="" class="news__img">
                    </div>
                    <div class="news__border"></div>
                    <div class="news__info">
                        <div class="news__header">Уколы на дому</div>
                        <div class="news__date">01.06.2018</div>
                        <div class="news__text">
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ...
                        </div>
                        <a href="#" class="news__more">
                            Читать дальше
                            <svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"
                                      fill="#41638A"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <a href="#" class="news__more news__more--outside">
                    Читать дальше
                    <svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"
                              fill="#41638A"/>
                    </svg>
                </a>
            </div>
            <div class="news news--vertical">
                <div class="news__wrapper">
                    <div class="news__photo">
                        <img src="../img/post--180(2).png" alt="" class="news__img">
                    </div>
                    <div class="news__border"></div>
                    <div class="news__info">
                        <div class="news__header">Уколы на дому</div>
                        <div class="news__date">01.06.2018</div>
                        <div class="news__text">
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ...
                        </div>
                        <a href="#" class="news__more">
                            Читать дальше
                            <svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"
                                      fill="#41638A"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <a href="#" class="news__more news__more--outside">
                    Читать дальше
                    <svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"
                              fill="#41638A"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="posts__wrapper posts__wrapper--slider">
            <div class="posts__slider-wrapper">
                <div class="posts__arrow posts__arrow&#45;&#45;left">
                <svg width="27" height="51" viewBox="0 0 27 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.9565 0.527584C24.3043 0.175861 24.7391 0 25.2174 0C25.6957 0 26.1304 0.175861 26.4783 0.527584C27.1739 1.23103 27.1739 2.37414 26.4783 3.07759L4.30435 25.5L26.4783 47.9224C27.1739 48.6259 27.1739 49.769 26.4783 50.4724C25.7826 51.1759 24.6522 51.1759 23.9565 50.4724L0.52174 26.775C-0.173912 26.0716 -0.173912 24.9284 0.52174 24.225L23.9565 0.527584Z" fill="black" fill-opacity="0.25"/>
                </svg>
                </div>
                <div class="posts__arrow posts__arrow&#45;&#45;right">
                <svg width="27" height="51" viewBox="0 0 27 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.9565 0.527584C24.3043 0.175861 24.7391 0 25.2174 0C25.6957 0 26.1304 0.175861 26.4783 0.527584C27.1739 1.23103 27.1739 2.37414 26.4783 3.07759L4.30435 25.5L26.4783 47.9224C27.1739 48.6259 27.1739 49.769 26.4783 50.4724C25.7826 51.1759 24.6522 51.1759 23.9565 50.4724L0.52174 26.775C-0.173912 26.0716 -0.173912 24.9284 0.52174 24.225L23.9565 0.527584Z" fill="black" fill-opacity="0.25"/>
                </svg>
                </div>
                <div class="posts__slider">
                <div class="news news&#45;&#45;vertical">
                <div class="news__wrapper">
                <div class="news__photo">
                <img src="../img/post&#45;&#45;180(2).png" alt="" class="news__img">
                </div>
                <div class="news__border"></div>
                <div class="news__info">
                <div class="news__header">Уколы на дому</div>
                <div class="news__date">01.06.2018</div>
                <div class="news__text">
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ...
                </div>
                <a href="#" class="news__more">
                Читать дальше
                <svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"
                fill="#41638A"/>
                </svg>
                </a>
                </div>
                </div>
                <a href="#" class="news__more news__more&#45;&#45;outside">
                Читать дальше
                <svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"
                fill="#41638A"/>
                </svg>
                </a>
                </div>
                <div class="news news&#45;&#45;vertical">
                <div class="news__wrapper">
                <div class="news__photo">
                <img src="../img/post&#45;&#45;180(2).png" alt="" class="news__img">
                </div>
                <div class="news__border"></div>
                <div class="news__info">
                <div class="news__header">Уколы на дому</div>
                <div class="news__date">01.06.2018</div>
                <div class="news__text">
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ...
                </div>
                <a href="#" class="news__more">
                Читать дальше
                <svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"
                fill="#41638A"/>
                </svg>
                </a>
                </div>
                </div>
                <a href="#" class="news__more news__more&#45;&#45;outside">
                Читать дальше
                <svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"
                fill="#41638A"/>
                </svg>
                </a>
                </div>
                <!--<div class="news news&#45;&#45;vertical">-->
                <!--<div class="news__wrapper">-->
                <!--<div class="news__photo">-->
                <!--<img src="../img/post&#45;&#45;180(2).png" alt="" class="news__img">-->
                <!--</div>-->
                <!--<div class="news__border"></div>-->
                <!--<div class="news__info">-->
                <!--<div class="news__header">Уколы на дому</div>-->
                <!--<div class="news__date">01.06.2018</div>-->
                <!--<div class="news__text">-->
                <!--At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ...-->
                <!--</div>-->
                <!--<a href="#" class="news__more">-->
                <!--Читать дальше-->
                <!--<svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"-->
                <!--xmlns="http://www.w3.org/2000/svg">-->
                <!--<path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"-->
                <!--fill="#41638A"/>-->
                <!--</svg>-->
                <!--</a>-->
                <!--</div>-->
                <!--</div>-->
                <!--<a href="#" class="news__more news__more&#45;&#45;outside">-->
                <!--Читать дальше-->
                <!--<svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"-->
                <!--xmlns="http://www.w3.org/2000/svg">-->
                <!--<path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"-->
                <!--fill="#41638A"/>-->
                <!--</svg>-->
                <!--</a>-->
                <!--</div>-->
                <!--<div class="news news&#45;&#45;vertical">-->
                <!--<div class="news__wrapper">-->
                <!--<div class="news__photo">-->
                <!--<img src="../img/post&#45;&#45;180(2).png" alt="" class="news__img">-->
                <!--</div>-->
                <!--<div class="news__border"></div>-->
                <!--<div class="news__info">-->
                <!--<div class="news__header">Уколы на дому</div>-->
                <!--<div class="news__date">01.06.2018</div>-->
                <!--<div class="news__text">-->
                <!--At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ...-->
                <!--</div>-->
                <!--<a href="#" class="news__more">-->
                <!--Читать дальше-->
                <!--<svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"-->
                <!--xmlns="http://www.w3.org/2000/svg">-->
                <!--<path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"-->
                <!--fill="#41638A"/>-->
                <!--</svg>-->
                <!--</a>-->
                <!--</div>-->
                <!--</div>-->
                <!--<a href="#" class="news__more news__more&#45;&#45;outside">-->
                <!--Читать дальше-->
                <!--<svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"-->
                <!--xmlns="http://www.w3.org/2000/svg">-->
                <!--<path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"-->
                <!--fill="#41638A"/>-->
                <!--</svg>-->
                <!--</a>-->
                <!--</div>-->
                <!--<div class="news news&#45;&#45;vertical">-->
                <!--<div class="news__wrapper">-->
                <!--<div class="news__photo">-->
                <!--<img src="../img/post&#45;&#45;180(2).png" alt="" class="news__img">-->
                <!--</div>-->
                <!--<div class="news__border"></div>-->
                <!--<div class="news__info">-->
                <!--<div class="news__header">Уколы на дому</div>-->
                <!--<div class="news__date">01.06.2018</div>-->
                <!--<div class="news__text">-->
                <!--At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ...-->
                <!--</div>-->
                <!--<a href="#" class="news__more">-->
                <!--Читать дальше-->
                <!--<svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"-->
                <!--xmlns="http://www.w3.org/2000/svg">-->
                <!--<path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"-->
                <!--fill="#41638A"/>-->
                <!--</svg>-->
                <!--</a>-->
                <!--</div>-->
                <!--</div>-->
                <!--<a href="#" class="news__more news__more&#45;&#45;outside">-->
                <!--Читать дальше-->
                <!--<svg class="news__more-icon" width="31" height="8" viewBox="0 0 31 8" fill="none"-->
                <!--xmlns="http://www.w3.org/2000/svg">-->
                <!--<path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5H30V3.5H0V4.5Z"-->
                <!--fill="#41638A"/>-->
                <!--</svg>-->
                <!--</a>-->
                <!--</div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="posts__contacts">
            <div class="posts__help">
                Вы можете получить консультацию по оформлению заказов и взаимодействию со специалистами, отправив свое
                сообщение на наш электронный адрес - <span>nurse@gmail.com</span>
            </div>
            <button class="button button--save">Отправить</button>
        </div>
    </div>
</section>


<?php
 if(isset($_GET['form'])){
  if($_GET['form']=='login'){
?>
<!--      <form action="" method="post">-->
      <?php $form = ActiveForm::begin([
          'id' => 'login-form',
          'layout' => 'horizontal',
          'fieldConfig' => [
              'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
              'labelOptions' => ['class' => 'col-lg-1 control-label'],
          ],
      ]); ?>
    <div class="popup-wrapper popup-wrapper&#45;&#45;login">
    <div class="popup login">
        <a href="?form=close">
<svg class="popup__close login__close" width="31" height="31" viewBox="0 0 31 31" fill="none"
xmlns="http://www.w3.org/2000/svg">
<rect x="0.999268" y="28.6875" width="39.3005" height="2.96611" rx="1"
transform="rotate(-45 0.999268 28.6875)" fill="#F35E5E"/>
<rect width="39.3005" height="2.96611" rx="1"
transform="matrix(0.706942 0.707271 -0.706942 0.707271 2.97583 0.998047)" fill="#F35E5E"/>
</svg>
        </a>

<div class="popup__header login__header">Вход в личный кабинет</div>
<div class="login__info">
Для работы в личном кабинете введите
свой текущий логин и пароль
</div>

<!--<input type="text"      name="login"    class="login__input" placeholder="E-mail или номер телефона">-->
        <?= $form->field($model, 'email')->textInput(['autofocus' => true,'class'=>'login__input','placeholder'=>'E-mail или номер телефона']) ?>
        <?= $form->field($model, 'password')->passwordInput(['class'=>'login__input', 'placeholder'=>'Пароль']) ?>
<!--<input type="password"  name="pass"     class="login__input" placeholder="Пароль">-->
<input type="submit"    name="login"    class="button button&#45;&#45;save" value="Войти">
<div class="login__links">
<div class="login__links-item"><a href="#">Забыли пароль?</a> </div>
<div class="login__links-item"><a href="/?form=reg">Регистрация</a> </div>

</div>
</div>
</div>
      <?php ActiveForm::end(); ?>
<?php
  }
 }
?>

<!--<div class="popup-wrapper popup-wrapper&#45;&#45;reset">-->
<!--<div class="reset">-->
<!--<svg class="popup__close reset__close" width="31" height="31" viewBox="0 0 31 31" fill="none"-->
<!--xmlns="http://www.w3.org/2000/svg">-->
<!--<rect x="0.999268" y="28.6875" width="39.3005" height="2.96611" rx="1"-->
<!--transform="rotate(-45 0.999268 28.6875)" fill="#F35E5E"/>-->
<!--<rect width="39.3005" height="2.96611" rx="1"-->
<!--transform="matrix(0.706942 0.707271 -0.706942 0.707271 2.97583 0.998047)" fill="#F35E5E"/>-->
<!--</svg>-->
<!--<div class="reset__header">Восстановление пароля</div>-->
<!--<div class="reset__info">-->
<!--Введите ваш e-mail или телефон, который вы использовали для входа на сайт, и мы вышлем вам забытый пароль в-->
<!--электронном письме.-->
<!--</div>-->
<!--<div class="reset__wrapper">-->
<!--<input type="text" class="reset__input" placeholder="E-mail или номер телефона">-->
<!--<button class="button button&#45;&#45;save">Войти</button>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->

<?php
if(isset($_GET['form'])){
if($_GET['form']=='reg'){
?>
    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
<div class="popup-wrapper popup-wrapper&#45;&#45;registration">
<div class="registration">
    <a href="?form=close">
<svg class="popup__close registration__close" width="31" height="31" viewBox="0 0 31 31" fill="none"
xmlns="http://www.w3.org/2000/svg">
<rect x="0.999268" y="28.6875" width="39.3005" height="2.96611" rx="1"
transform="rotate(-45 0.999268 28.6875)" fill="#F35E5E"/>
<rect width="39.3005" height="2.96611" rx="1"
transform="matrix(0.706942 0.707271 -0.706942 0.707271 2.97583 0.998047)" fill="#F35E5E"/>
</svg>
    </a>
<div class="registration__header">Регистрация</div>
    <?= $form->field($model, 'email')->textInput(['autofocus' => true,'class'=>'registration__input', 'placeholder'=>'Введите ваш e-mail']) ?>
    <?= $form->field($model, 'phone')->textInput(['class'=>'registration__input', 'placeholder'=>'Ваш номер телефона']) ?>
    <?= $form->field($model, 'password')->passwordInput(['class'=>'registration__input', 'placeholder'=>'Пароль']) ?>

    <input type="submit"    name="login"    class="button button&#45;&#45;save" value="Зарегистрироваться">
<div class="registration__terms">
Регистрируясь на этом сайте, вы принимаете<br>нашу <a href="#">политику конфиденциальности</a>
</div>
</div>
</div>
    <?php ActiveForm::end(); ?>
<?php
}
}
?>

