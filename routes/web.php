<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ConsultationsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get(
//     '/users/create',
//     [\App\Http\Controllers\UserController::class, 'create']
// )->middleware('can:create-users');
// Route::middleware('create-users')->group(function () {
//     Route::get(
//         '/users/create',
//         [\App\Http\Controllers\UserController::class, 'create']
//     );

//     Route::post(
//         '/users',
//         [\App\Http\Controllers\UserController::class, 'store']
//     );
// });

//Route::get('profile', [UserController::class, 'show'])->middleware('auth');
// Route::get('user/view', 'UserController@view');
// Route::get('user/create', 'UserController@create');
// Route::get('user/update', 'UserController@update');
// Route::get('user/delete', 'UserController@delete');

///


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    // Route::resource('recipyAdjusments', RecipyAdjusmentsController::class);
    Route::resource('consultations', ConsultationsController::class);
    Route::resource('calendar', CalendarController::class);
    Route::resource('doctor', DoctorController::class);
    Route::resource('users', UserController::class);




    //Route::get('ingredients', [IngredientsController::class, 'ingredients']);
});

// Route::get('/', function () {
//     return view('ingredients.index');
// });
//Route::get('ingredients', 'App\Http\Controllers\IngredientsController@register');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
