<?php
include '../rk-light/autoloader.php';

$rk = new RK();
$rk->loadConfig('core/config/config.php', true);
$rk->connectDB();
$rk->router->routeFile('routes.php');
