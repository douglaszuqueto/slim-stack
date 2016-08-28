<?php
session_start();
$app->get('/', 'HomeController:index');

$app->get('/teste', function () {

    print_r($this->flash->getMessages());
});