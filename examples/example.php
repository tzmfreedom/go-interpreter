<?php

require_once __DIR__ . '/../vendor/autoload.php';

$runner = new \GoInterpreter\Runner();
$runner->run($argv[1], 'Test');
$runner->run($argv[1], 'Hoge');
$runner->run($argv[1], 'Fuga');
