<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Trang-Chủ', route(url('home')));
});

// Category
Breadcrumbs::for('category', function ($trail) {
    $trail->parent('home');
    $trail->push('Danh-Mục', route('category'));
});