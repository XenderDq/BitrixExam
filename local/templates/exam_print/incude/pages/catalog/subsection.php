<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true){
    exit;
}
?>
<section class="main-catalog container top-section" data-aos="fade-up" data-aos-duration="1500">
    <?php
    $APPLICATION->IncludeComponent(
        "bitrix:catalog.section.list",
        "main_catalog2",
        Array(
            "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
            "VIEW_MODE" => "TEXT",
            "SHOW_PARENT_NAME" => "Y",
            "IBLOCK_TYPE" => "",
            "IBLOCK_ID" => "5",
            "SECTION_ID" => $_REQUEST["SECTION_ID"],
            "SECTION_CODE" => "",
            "SECTION_URL" => "",
            "COUNT_ELEMENTS" => "Y",
            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
            "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
            "TOP_DEPTH" => "2",
            "SECTION_FIELDS" => "",
            "SECTION_USER_FIELDS" => [
                "UF_123"
            ],
            "ADD_SECTIONS_CHAIN" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_NOTES" => "",
            "CACHE_GROUPS" => "Y"
        )
    );
    ?>
</section>

