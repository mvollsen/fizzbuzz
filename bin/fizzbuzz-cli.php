#!/usr/bin/env php
<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Controller\FizzBuzzController;
use App\Logic\FizzBuzzer;
use App\View\DumpView;

$controller = new FizzBuzzController(
    new FizzBuzzer(),
    new DumpView()
);

for ($i = 1; $i <= 100; ++$i) {
    $controller->processAction($i);
}
