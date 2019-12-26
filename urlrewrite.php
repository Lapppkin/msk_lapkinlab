<?php
$arUrlRewrite = array (
  10 =>
      array(
          'CONDITION' => '#^/novosti/([0-9]+)-([0-9a-zA-Z_-]+)?(.+)#',
          'RULE' => 'ID=$1&ELEMENT_CODE=$1',
          'ID' => '',
          'PATH' => '/novosti/index.php',
          'SORT' => 100,
      ),
  20 =>
      array(
          'CONDITION' => '#^/novosti/#',
          'RULE' => '',
          'ID' => 'bitrix:news',
          'PATH' => '/index.php',
          'SORT' => 100,
      ),
  100 =>
      array (
          'CONDITION' => '#^/ajax/#',
          'RULE' => '/local/php_interface/ajax.php',
          'SORT' => 100,
      ),
);
