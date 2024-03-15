 <?php

if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true){
    exit;
}
?>
    <section class="catalog-detail top-section container">
        <div class="catalog-detail__breadcrumbs mobile">
            <div class="breadcrumbs">
                <div class="breadcrumbs-wrapper">
                    <div class="breadcrumbs-wrapper__row"><a class="breadcrumbs__item" href="#">главная</a>
                        <div class="breadcrumbs__arrow"><svg width="9" height="14" viewbox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.501732 0.71693C0.688798 2.76241 1.82258 7.06302 8.00226 7.42407C8.43495 7.44882 8.66756 6.9815 8.3585 6.70488L1.3053 0.390819C0.992979 0.109838 0.465946 0.325304 0.501732 0.71693Z" fill="#F64653"></path>
                                <path d="M0.501732 13.2839C0.688798 11.2384 1.82258 6.9378 8.00226 6.57675C8.43495 6.552 8.66756 7.01934 8.3585 7.29595L1.3053 13.61C0.992979 13.8895 0.465946 13.6755 0.501732 13.2839Z" fill="#F64653"></path>
                            </svg></div><a class="breadcrumbs__item" href="#">каталог</a>
                        <div class="breadcrumbs__arrow"><svg width="9" height="14" viewbox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.501732 0.71693C0.688798 2.76241 1.82258 7.06302 8.00226 7.42407C8.43495 7.44882 8.66756 6.9815 8.3585 6.70488L1.3053 0.390819C0.992979 0.109838 0.465946 0.325304 0.501732 0.71693Z" fill="#F64653"></path>
                                <path d="M0.501732 13.2839C0.688798 11.2384 1.82258 6.9378 8.00226 6.57675C8.43495 6.552 8.66756 7.01934 8.3585 7.29595L1.3053 13.61C0.992979 13.8895 0.465946 13.6755 0.501732 13.2839Z" fill="#F64653"></path>
                            </svg></div><a class="breadcrumbs__item" href="#">мороженое</a>
                        <div class="breadcrumbs__arrow"><svg width="9" height="14" viewbox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.501732 0.71693C0.688798 2.76241 1.82258 7.06302 8.00226 7.42407C8.43495 7.44882 8.66756 6.9815 8.3585 6.70488L1.3053 0.390819C0.992979 0.109838 0.465946 0.325304 0.501732 0.71693Z" fill="#F64653"></path>
                                <path d="M0.501732 13.2839C0.688798 11.2384 1.82258 6.9378 8.00226 6.57675C8.43495 6.552 8.66756 7.01934 8.3585 7.29595L1.3053 13.61C0.992979 13.8895 0.465946 13.6755 0.501732 13.2839Z" fill="#F64653"></path>
                            </svg></div>
                        <div class="breadcrumbs__current active">Варежка</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="catalog-detail__inner">



            <div class="catalog-detail__col info" data-aos="fade-up">
                <div class="catalog-detail__breadcrumbs desktop">
                    <div class="breadcrumbs">
                        <div class="breadcrumbs-wrapper">
                            <div class="breadcrumbs-wrapper__row">

                                <?php
                                $APPLICATION->IncludeComponent(
                                    "bitrix:breadcrumb",
                                    "bread_catalog",
                                    [
                                        "START_FROM" => "0",
                                        "PATH" => "",
                                        "SITE_ID" => "s1",
                                    ]
                                );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:news.detail",
                    "catalog_items",
                    Array(
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "USE_SHARE" => "Y",
                        "SHARE_HIDE" => "N",
                        "SHARE_TEMPLATE" => "",
                        "SHARE_HANDLERS" => array("delicious"),
                        "SHARE_SHORTEN_URL_LOGIN" => "",
                        "SHARE_SHORTEN_URL_KEY" => "",
                        "AJAX_MODE" => "Y",
                        "IBLOCK_TYPE" => "news",
                        "IBLOCK_ID" => "5",
                        "ELEMENT_CODE" => $segmentsUrl[3],
                        "CHECK_DATES" => "Y",
                        "FIELD_CODE" => Array("ID"),
                        "PROPERTY_CODE" => Array("DESCRIPTION"),
                        "DETAIL_URL" => "",
                        "SET_TITLE" => "Y",
                        "SET_CANONICAL_URL" => "Y",
                        "SET_BROWSER_TITLE" => "Y",
                        "BROWSER_TITLE" => "-",
                        "SET_META_KEYWORDS" => "Y",
                        "META_KEYWORDS" => "-",
                        "SET_META_DESCRIPTION" => "Y",
                        "META_DESCRIPTION" => "-",
                        "SET_STATUS_404" => "Y",
                        "SET_LAST_MODIFIED" => "Y",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "ADD_ELEMENT_CHAIN" => "N",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "USE_PERMISSIONS" => "Y",
                        "GROUP_PERMISSIONS" => Array("1"),
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "Y",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Страница",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_SHOW_ALL" => "Y",
                        "PAGER_BASE_LINK_ENABLE" => "Y",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => "",
                        "STRICT_SECTION_CHECK" => "Y",
                        "PAGER_BASE_LINK" => "",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N"
                    )
                );
                ?>
            </div>
        <div class="overlay"></div>
    </section>


