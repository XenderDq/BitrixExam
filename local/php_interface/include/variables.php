<?php

use Bitrix\Main\Application;
use Bitrix\Main\Web\Uri;

$request = Application::getInstance()->getContext()->getRequest();
$isAjax = $request->isAjaxRequest();
$uri = new Uri($request->getRequestUri());
$cleanPath = $uri->getPath();

$getData = $request->getQueryList()->toArray();
$postData = $request->getPostList()->toArray();
$segmentsUrl = explode('/', $cleanPath);
//чистим segmentsUrl от пустых значений
$urlArr = array_diff($segmentsUrl, ['']);