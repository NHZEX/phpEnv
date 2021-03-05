#!/usr/bin/env php
<?php

declare(strict_types=1);

use Zxin\PhpEnv\App;

require __DIR__ . '/vendor/autoload.php';

$app = App::getInstance();

$app->getConsole()->run();
