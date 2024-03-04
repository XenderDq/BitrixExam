<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
    die();

}
?>
<!--<div class="header-main__col left">-->
<!--    <div class="header-main__navigation">-->
<!--        -->
<!--        <div class="header-main__navigation-col">-->
<!--            <nav class="header-main__navigation-nav">-->
<!--                --><?php //foreach ($arResult['SECOND'] as $item): ?>
<!--                    <a class="header-main__navigation-link" href="--><?php //=$item['LINK']?><!--">--><?php //=$item['TEXT']?><!--</a>-->
<!--                --><?php //endforeach; ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="footer-content__subcol-top">
    <nav class="footer-content__nav">
        <?php foreach ($arResult['FIRST'] as $item): ?>
        <ul class="footer-content__nav-list">
            <li class="footer-nav__list-item">
                <a class="footer-content__nav-item" href="<?=$item['LINK']?>"><?=$item['TEXT']?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</div>

<!--<div class="header-main__wrapper mobile">-->
<!--    <div class="header-main__close">-->
<!--        <div class="header-main__close-btn" data-header-close>-->
<!--            <div class="btn-hover_parent">-->
<!--                <div class="btn-hover_circle white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">-->
<!--                    <path d="M6.69678 6.69671L17.3034 17.3033" stroke="#0068FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>-->
<!--                    <path d="M6.69662 17.3033L17.3032 6.69671" stroke="#0068FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>-->
<!--                </svg>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="header-main__inner">-->
<!--        <div class="header-main__col">-->
<!--            <div class="header-main__contacts">-->
<!--                <div class="header-main__contacts-col">-->
<!--                    <div class="header-main__contacts-office">Центральный офис</div>-->
<!--                    <a class="header-main__contacts-tel" href="tel:+78614725800">8 (86147) 2-58-00</a>-->
<!--                    <a class="header-main__contacts-mail" href="mailto:zdor_prod@mail.ru">zdor_prod@mail.ru</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="header-main__col">-->
<!--            <div class="header-main__production" data-mob-production>-->
<!--                <div class="header-main__production-text">Продукция</div>-->
<!--                <div class="header-main__production-icon"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                        <path d="M10 7.53558L6.46484 11.0711" stroke="#EAF3FF" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>-->
<!--                        <path d="M9.99969 7.53589L6.46387 4.00006" stroke="#EAF3FF" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>-->
<!--                    </svg></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="header-main__col">-->
<!--            <div class="header-main__navigation">-->
<!--                <div class="header-main__navigation-col left">-->
<!--                    <nav class="header-main__navigation-nav"><a class="header-main__navigation-link" href="#">О компании</a>-->
<!--                        <a class="header-main__navigation-link" href="#">Работа у нас</a><a class="header-main__navigation-link" href="#">Новости и акции</a>-->
<!--                        <a class="header-main__navigation-link" href="#">Торговые марки</a><a class="header-main__navigation-link" href="#">Партнерам</a>-->
<!--                    </nav>-->
<!--                </div>-->
<!--                <div class="header-main__navigation-col">-->
<!--                    <nav class="header-main__navigation-nav"><a class="header-main__navigation-link" href="#">Рецепты</a>-->
<!--                        <a class="header-main__navigation-link" href="#">Где купить</a>-->
<!--                        <a class="header-main__navigation-link" href="#">Контакты</a>-->
<!--                        <a class="header-main__navigation-link" href="#">Видео</a>-->
<!--                    </nav>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="header-main__contacts-col">-->
<!--            <div class="header-main__contacts-top"><a class="header-main__contacts-policy" href="#">Политика конфиденциальности</a>-->
<!--                <div class="header-main__contacts-copy">© 2008-2023 «Здоровые продукты»</div>-->
<!--                <div class="header-main__contacts-dev"><span>Сделано в</span><a href="#"> Клаудмил</a></div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->