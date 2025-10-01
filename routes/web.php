<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/test', function () {
//     return Inertia::render('Home');
// });

Route::get('/', function () {
    return inertia('Welcome', [
        'name' => 'John Doe',
        'frameworks' => ['Laravel', 'Vue', 'Inertia'],
    ]);
});

Route::get('/users', function () {
    return inertia('Users', [
        'time' => now()->toTimeString()
    ]);
});

Route::get('/settings', function () {
    return inertia('Settings');
});

Route::post('/logout', function () {
    // dd('User logging out');
    dd(request('foo'));
});

Route::get('/test', function () {
    return inertia('Test');
});
