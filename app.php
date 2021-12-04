<?php
namespace App;
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Symfony\Component\Console\Application;

$app = new Application();

// ... register commands
$app->add(new SayHello());
//$app->add(new App\RepeatString());

//$app->add(new App\Guest());
$app->run();