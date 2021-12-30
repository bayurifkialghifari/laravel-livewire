<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Setting Menu
Breadcrumbs::for('setting-menu', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', url('/admin'));
    $trail->push('Setting');
    $trail->push('Menu');
});
