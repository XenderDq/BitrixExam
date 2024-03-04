<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

use Bitrix\Currency\CurrencyManager;
use Bitrix\Main\Loader;
use Bitrix\Catalog\Product\Basket;

if ($rGetData['items']['id']) {
    $ajax = true;
    Loader::includeModule('sale');
    $result = Basket::addProduct([
        'CURRENCY' => CurrencyManager::getBaseCurrency(),
        'PRODUCT_ID' => (int) $rGetData['items']['id'],
        'QUANTITY' => (int) $rGetData['items']['count'],
    ]);

    if (!$result->isSuccess()) {
        $APPLICATION->RestartBuffer();
        echo '<pre>';
        var_dump($result->getErrorMessages());
        echo '</pre>';
        exit;
    }
}

$query = trim($rGetData['search']);
if ($query) {
    $filterSearch = [
        'IBLOCK_ID' => CATALOG_IBLOCK_ID,
        'NAME' => '%' . $query . '%',
    ];
}
?>
<main class="main">
    <section class="first-section mb120">
        <div class="container">
            <?php require TEMPLATE_PATH . '/include/layers/lk/cabinet_top.php' ?>
            <h1 class="h1 cabinet-title" data-aos="fade-up">Каталог</h1>
            <?php

            $APPLICATION->IncludeComponent(
                "bitrix:catalog.section.list",
                "coffee-sect-list",
                [
                    "ACTIVE_SECT" => $segmentsUrl[2],
                    "ACTIVE_SUBSECT" => $segmentsUrl[3],
                    "IBLOCK_ID" => CATALOG_IBLOCK_ID,
                    "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "Y",
                    "TOP_DEPTH" => 2,
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_NOTES" => "",
                    "CACHE_GROUPS" => "Y",
                    "CUSTOM_SECTION_SORT" => ["sort" => "asc"]
                ]
            );
            ?>
            <form class="catalog-search" method="get" data-aos="fade-up" novalidate="">
                <div class="form-label catalog-search__label" id="catalog-search">
                    <input name="search" class="catalog-search__input form-input" placeholder="Искать по каталогу" data-catalog-search-input=""/>
                    <button class="catalog-search__reset" type="reset" name="reset" data-catalog-search-reset="">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="32" height="32" rx="16" fill="#EEF1F3"></rect>
                            <path d="M12.0059 12.0044L20.0009 19.9995" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M12.0127 19.9995L20.0078 12.0044" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
                <button class="button black catalog-search__button" type="submit">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.58366 17.7191C13.9559 17.7191 17.5003 14.1747 17.5003 9.80241C17.5003 5.43016 13.9559 1.88574 9.58366 1.88574C5.21141 1.88574 1.66699 5.43016 1.66699 9.80241C1.66699 14.1747 5.21141 17.7191 9.58366 17.7191Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M18.3337 18.5524L16.667 16.8857" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="only-desktop">Поиск</span>
                </button>
            </form>
            <?php

            if ($query) {
                $APPLICATION->ShowViewContent('search');
            }

            $APPLICATION->IncludeComponent(
                "bitrix:catalog.section",
                "catalog",
                [
//                    "IMG_SIZE" => [
//                        'width' => 290,
//                        'height' => 305,
//                    ],
"IMG_SIZE_THUMB" => [
    'width' => 85,
    'height' => 100,
],
"IMG_SIZE" => [
    'width' => 1920,
    'height' => 1080,
],
"SECTION_CODE" => $urlArr[3] ? : $urlArr[2],
"FILTER_NAME" => "filterSearch",
"CACHE_FILTER" => "N",
"CACHE_GROUPS" => "Y",
"CACHE_TIME" => "36000000",
"CACHE_TYPE" => "A",
"CURRENCY_ID" => "RUB",
"DISPLAY_BOTTOM_PAGER" => "Y",
"ELEMENT_SORT_FIELD" => "sort",
"ELEMENT_SORT_FIELD2" => "id",
"ELEMENT_SORT_ORDER" => "asc",
"ELEMENT_SORT_ORDER2" => "desc",
"IBLOCK_ID" => CATALOG_IBLOCK_ID,
"IBLOCK_TYPE" => "catalog",
"INCLUDE_SUBSECTIONS" => "Y",
"PAGER_TEMPLATE" => "showmore",
"PAGE_ELEMENT_COUNT" => 12, //12
"PRICE_CODE" => [
    "BASE",
    "opt10",
    "opt30",
    "opt50",
    "opt200",
],
"PRICE_VAT_INCLUDE" => "Y",
"PROPERTY_CODE" =>
    [
        'OBRABOTKA',
        'OBZHARKA',
        'KISLOTNOST',
        'PLOTNOST',
        'OTHER_IMAGES',
        'BRAND',
    ]
,
"SET_STATUS_404" => "Y",
"SHOW_404" => "Y",
"SET_BROWSER_TITLE" => "Y",
"SET_TITLE" => "Y",
                ]
            );
            ?>
        </div>
    </section>
</main>
