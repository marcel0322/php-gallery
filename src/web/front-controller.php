<?php 
require '../../vendor/autoload.php';
require '../router.php';

$router = new router();

$router -> get('/', 'indexController::View');
$router -> post('/upload', 'uploadController::uploadFile');
$router -> get('/form', 'formController::View');
$router -> get('/gallery', 'galleryController::View');

$router-> _404('errorController::_404');

$view = $router-> dispatch();
$view->render();