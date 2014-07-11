<?php

require(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

use Hoa\Worker\Backend\Shared;

echo Shared::start(
    'unix:///var/run/php5-fpm.pierozi.sock',
    __DIR__ . DIRECTORY_SEPARATOR . 'worker.php',
    array(
        'argv[0]' => 'Foo',
        'argv[1]' => 'Bar',
        'argc'    => 2
    )
);

echo Shared::start(
    'unix:///var/run/php5-fpm.pierozi.sock',
    __DIR__ . DIRECTORY_SEPARATOR . 'worker.php',
    'foo'
);