<?php
$container = $app->getContainer();

$controllers = [
    'UserController' => App\Applications\User\Http\Controllers\UserController::class,
    'HomeController' => App\Core\Http\Controllers\HomeController::class
];

foreach ($controllers as $key => $value){
    $container[$key] = function ($c) use ($container, $app, $value) {
        $controller = new $value($c, $app);
        return $controller;
    };
}

/**
 * UserController
 */
//$container['UserController'] = function ($c) use ($container, $app) {
//    $controller = new App\Applications\User\Http\Controllers\UserController($c, $app);
//    return $controller;
//};
///**
// * HomeController
// */
//$container['HomeController'] = function ($c) use ($container, $app) {
//    $controller = new App\Core\Http\Controllers\HomeController($c, $app);
//    return $controller;
//};