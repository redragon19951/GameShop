<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-02-28 11:29:26
 */

$app = Yee\Yee::getInstance();

$app->map("/", "HomeController::___index")->via("GET")->name("home.index");
$app->map("/login", "HomeController::___login")->via("POST")->name("home.index");

