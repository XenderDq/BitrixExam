<?php

use Bitrix\Main\Application;
use Bitrix\Main\Context;
use Bitrix\Main\Request;
use Bitrix\Main\Server;

$context = Application::getInstance()->getContext();
$request = $context->getRequest();
$requestUri = $request->getRequestUri();
$values = $request->getQueryList()->toArray();



$urls_pieces = explode("/", $requestUri);
$clear_url = [];
foreach ($urls_pieces as $i => $item) {
    if ($item != '') {
        $clear_url[] = $item;
    }
}






