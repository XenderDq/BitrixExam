<?php

if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

if ($segmentsUrl[3]) {
    include 'layers/detail.php';
} else if ($segmentsUrl[2]) {
    include 'layers/section.php';
} else {
    include 'layers/catalog.php';
}
