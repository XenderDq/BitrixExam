<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    exit;

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/vendor.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/app.js');

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/590.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/app.css');


//$APPLICATION->AddHeadScript($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/assets/app.js");
//$APPLICATION->AddHeadScript($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/assets/vendor.js");
//$APPLICATION->SetAdditionalCSS($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/590.css");
//$APPLICATION->SetAdditionalCSS($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/app.css");

?>