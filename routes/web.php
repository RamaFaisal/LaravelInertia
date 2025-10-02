<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/test', function () {
//     return Inertia::render('Home');
// });

Route::get('/', function () {
    return inertia('Welcome', [
        'username' => 'John Doe',
        'frameworks' => ['Laravel', 'Vue', 'Inertia'],
    ]);
});

Route::get('/users', function () {
    return inertia('Users', [
        'users' => User::all(),
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

// Cara Fajar
// Route::inertia('/user-fajar', 'Student/All');
Route::get('/user-fajar', function () {
    $user = [
        'name' => 'Ben',
        'age' => 20
    ];
    // return Inertia::render('Student/All');
    return inertia('Student/All', [
        'user' => $user
    ]);
});
