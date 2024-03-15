<?php

if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true){
    exit;
}

if (!$clear_url[3]&&!$clear_url[2]&&!$clear_url[1]) {
    include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/incude/pages/catalog/subsection.php';
} elseif (!$clear_url[3]&&!$clear_url[2]) {
    include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/incude/pages/catalog/section.php';
} else {
    include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/incude/pages/catalog/detail.php';
}

