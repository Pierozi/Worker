<?php

require(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

use Hoa\Worker\Backend\Shared;

echo Shared::start(
    'tcp://127.0.0.1:7000',
    __DIR__ . DIRECTORY_SEPARATOR . 'worker.php',
    array(
        'argv[0]' => 'Foo',
        'argv[1]' => 'Bar',
        'argc'    => 2
    )
);

sleep(2);

echo Shared::start(
    'tcp://127.0.0.1:7000',
    __DIR__ . DIRECTORY_SEPARATOR . 'worker.php',
    ['foo' => 'bar', 'baz' => (float)15.466]
);

sleep(2);

echo Shared::start(
    'tcp://127.0.0.1:7000',
    __DIR__ . DIRECTORY_SEPARATOR . 'worker.php'
);