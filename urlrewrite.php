<?php
$arUrlRewrite=array (
  4 => 
  array (
    'CONDITION' => '#^/catalog/filter/(.+?)/apply/\\??(.*)#',
    'RULE' => 'SMART_FILTER_PATH=$1&$2',
    'ID' => 'bitrix:catalog.smart.filter',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/news/([a-z-0-9_]+)/#',
    'RULE' => '',
    'ID' => 'bitrix:news.detail',
    'PATH' => '/news/element.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog.section',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog.section',
    'PATH' => '/catalog/section.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news.list',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
