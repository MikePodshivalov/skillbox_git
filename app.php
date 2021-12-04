<?php
namespace App;
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Symfony\Component\Console\Application;

$app = new Application();
$app->add(new QuestionToUser());
$app->add(new SayHello());
$app->add(new Repeat());
$app->run();