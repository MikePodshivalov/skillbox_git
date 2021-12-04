<?php
<<<<<<< HEAD
namespace App;
=======
>>>>>>> repeat
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Symfony\Component\Console\Application;

$app = new Application();
<<<<<<< HEAD
$app->add(new QuestionToUser());
$app->add(new SayHello());
=======
$app->add(new App\Repeat());
>>>>>>> repeat
$app->run();