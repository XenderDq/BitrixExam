<?php
$arUrlRewrite = array(
    0 => array(
        'CONDITION'=>"#^/news/([a-zA-Z0-9_-]+)/([a-zA-Z0-9_-]+)/#",
        "RULE" => "SECTION_CODE=$1&CODE=$2",
        "PATH" => "/news/index.php",
        "SORT" => 200,
    ),
    1 => array(
      'CONDITION'=>"#^/news/([a-zA-Z0-9_-]+)/#",
        "RULE" => "SECTION_CODE=$1",
        "PATH" => "/news/index.php",
        "SORT" => 100,
    ),

);

