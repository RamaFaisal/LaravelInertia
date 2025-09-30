<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/test', function () {
    return Inertia::render('Home');
});

Route::get('/', function () {
    return inertia('Welcome', [
        'name' => 'John Doe',
        'frameworks' => ['Laravel', 'Vue', 'Inertia'],
    ]);
});

Route::get('/users', function () {
    return inertia('Users');
});

Route::get('/settings', function () {
    return inertia('Settings');
});
