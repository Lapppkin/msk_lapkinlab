<?php
$arUrlRewrite=array (
  14 => 
  array (
    'CONDITION' => '#^/portfolio/work/([A-Za-z0-9\\-\\_]*)/#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/portfolio/work/index.php',
    'SORT' => 100,
  ),
  15 => 
  array (
    'CONDITION' => '#^/novosti/([0-9a-zA-Z_-]+)?(.+)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/novosti/element/index.php',
    'SORT' => 100,
  ),
  16 => 
  array (
    'CONDITION' => '#^/novosti/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/index.php',
    'SORT' => 100,
  ),
);
