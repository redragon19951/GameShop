<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-02-28 11:29:26
 */

$app = Yee\Yee::getInstance();

$app->map("/home", "StoreController::___indexAction")->via("GET")->name("home.index");
$app->map("/register", "StoreController::___register")->via("GET")->name("register");
$app->map("/yes", "StoreController::___login")->via("POST")->name("registered");

