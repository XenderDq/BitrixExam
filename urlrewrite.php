<?php
$arUrlRewrite=array (
  2 => 
  array (
    'CONDITION' => '#^/catalog/([a-zA-Z0-9_-]+)/([a-zA-Z0-9_-]+)/#',
    'RULE' => 'SECTION_CODE=$1&CODE=$2',
    'ID' => '',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/catalog/([a-zA-Z0-9_-]+)/#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
  1 =>
      array (
          'CONDITION' => '#^/news/([a-zA-Z0-9_-]+)/([a-zA-Z0-9_-]+)/#',
          'RULE' => 'SECTION_CODE=$1&CODE=$2',
          'PATH' => '/news/index.php',
          'SORT' => 200,
      ),
  0 =>
      array (
          'CONDITION' => '#^/news/([a-zA-Z0-9_-]+)/#',
          'RULE' => 'SECTION_CODE=$1',
          'PATH' => '/news/index.php',
          'SORT' => 100,
      ),
);
