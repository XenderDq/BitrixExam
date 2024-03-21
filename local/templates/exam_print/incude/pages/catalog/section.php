<?php

if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true){
    exit;
}

global $arFilter;
$arFilter = [];
?>
    <section class="main-catalog container top-section" data-aos="fade-up" data-aos-duration="1500">
        <main class="main">
            <section class="catalog-hero top-section container">
                <div class="catalog-hero__breadcrumbs">
                    <div class="breadcrumbs">
                        <div class="breadcrumbs-wrapper">
                            <div class="breadcrumbs-wrapper__row">
                                <?php
                                $APPLICATION->IncludeComponent(
                                    "bitrix:breadcrumb",
                                    "bread",
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
                    "bitrix:news.list",
                    "catalog",
                    [
                        "FILTER_CODES" => [
                            "BRANDS",
                            "ZHIR"
                        ],
                        "PARENT_SECTION_CODE" => $clear_url[1],
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "AJAX_MODE" => "Y",
                        "IBLOCK_TYPE" => "content",
                        "IBLOCK_ID" => "5",
                        "NEWS_COUNT" => "20",
                        "SORT_BY1" => "SORT",
                        "SORT_ORDER1" => "ASC",
                        "FILTER_NAME" => "arFilter",
                        "FIELD_CODE" => array(
                            0 => "ID",
                            1 => "NAME",
                            2 => "PREVIEW_TEXT",
                            3 => "PREVIEW_PICTURE",
                            4 => "DETAIL_PICTURE",
                            5 => "",
                        ),
                        "PROPERTY_CODE" => array(
                            0 => "",
                            1 => "LINK_SECTION_SLIDER",
                            2 => "LABEL",
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "Y",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_LAST_MODIFIED" => "Y",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "Y",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "Y",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_DESC_NUMBERING" => "Y",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "Y",
                        "PAGER_BASE_LINK_ENABLE" => "Y",
                        "SET_STATUS_404" => "Y",
                        "SHOW_404" => "Y",
                        "MESSAGE_404" => "",
                        "PAGER_BASE_LINK" => "",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "COMPONENT_TEMPLATE" => "slider_main",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N",
                        "FILE_404" => ""
                    ],
                    false
                );
               ?>
            </section>
            <section class="catalog-list container section-animation" data-aos="fade-up">
                <div class="catalog-list__inner">

                    <?php
                    $APPLICATION->ShowViewContent('elems');
                    ?>
                </div>
                <div class="catalog-list__more btn-hover_parent">
                    <div class="btn-hover_circle"></div>
                    <span>
                    Показать еще
                </span>
                </div>
            </section>
        </main>
    </section>


