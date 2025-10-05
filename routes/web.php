<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
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
    return Inertia::render('Users/Index', [
        'users' => User::query()
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(10)
            ->withQueryString()
            ->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email
            ]),
        'filters' => Request::only(['search'])
    ]);
});

Route::get('/users/create', function () {
    return inertia('Users/Create');
});

Route::post('/users', function () {
    $attribute = Request::validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required'
    ]);

    User::create($attribute);

    return redirect('/users');
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

Route::get('/gemini', function () {
    return inertia('Student/TestGem');
});
