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

$phoneRegex = '/^\+\d{1,2} \(\d{3}\) \d{3}-\d{2}-\d{2}$/';
$emailRegex = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
$nameRegex = '/^[А-Яа-яЁё\s]+$/u';

