<?php
$arUrlRewrite = [
    15  =>
        array(
            'CONDITION' => '#^/blog/([0-9a-zA-Z_-]+)?(.+)#',
            'RULE'      => 'ELEMENT_CODE=$1',
            'ID'        => '',
            'PATH'      => '/blog/element/index.php',
            'SORT'      => 100,
        ),
    20  =>
        array(
            'CONDITION' => '#^/blog/#',
            'RULE'      => '',
            'ID'        => 'bitrix:news',
            'PATH'      => '/index.php',
            'SORT'      => 100,
        ),
    100 =>
        array(
            'CONDITION' => '#^/ajax/#',
            'RULE'      => '/local/php_interface/ajax.php',
            'SORT'      => 100,
        ),
];
