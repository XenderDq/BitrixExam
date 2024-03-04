<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
include $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH . '/incude/pages/news/index.php';
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>