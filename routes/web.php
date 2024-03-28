<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home', [
        'name' => 'Home',
    ]);
});

Route::get('/about', function () {
    return Inertia::render('About', [
        'name' => 'About'
    ]);
});

Route::get('/users', function () {
    return Inertia::render('Users/Index', [
        'name' => 'Users',
        'users' => User::query()
            ->when(request('search'), function ($query, $search)  {
                $query->where('name','like', "%$search%");
            })
            ->paginate(10)
            ->withQueryString()
            ->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name,
            ]),

            'filters' => request()->only('search')
    ]);
});

Route::get('/users/create', function() {
    return Inertia::render('Users/Create', ['name' => 'Create User']);
});

Route::post('/users', function(Request $request) {
    $user = $request->validate([
        'name'=> ['required','string', 'min:1'],
        'email'=> ['required','email'],
        'password'=> ['required','min:8'],
    ]);

    User::create($user);

    return redirect('/users');
});

Route::post('logout', function () {
    dd('logg out');
});
