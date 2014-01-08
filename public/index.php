<?php
  require '../vendor/autoload.php';

  $app = new \Slim\Slim();
  $app->config('templates.path', '../views');

  $app->get('/', function() use ($app) {
    $app->render('root.php');
  });

  $app->any('/rest', function() use ($app) {
    $app->render('rest.php');
  });
  
  $app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
  });

  $app->run();
