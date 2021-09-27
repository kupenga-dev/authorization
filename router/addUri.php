<?php

use App\Services\Router;

$routerItem = new App\Services\Router;
//обычные url
$routerItem->page('/', 'login');
$routerItem->page('/registration', 'register');
$routerItem->page('/profile', 'profile');

//url с action
$routerItem->page('/auth/register', null, 'register', true, true);
$routerItem->page('/auth/auth', null, 'auth', true, true);
$routerItem->page('/auth/logout', null, 'logout', false, true);

$routerItem->enable();


?>