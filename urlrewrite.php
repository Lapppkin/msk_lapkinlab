<?php
$arUrlRewrite = array (
  10 =>
  array (
    'CONDITION' => '#^/novosti/([0-9a-zA-Z_-]+)?(.+)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/novosti/element/index.php',
    'SORT' => 100,
  ),
  20 =>
  array (
    'CONDITION' => '#^/novosti/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/index.php',
    'SORT' => 100,
  ),
);
