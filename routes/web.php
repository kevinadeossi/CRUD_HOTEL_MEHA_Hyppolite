<?php

use App\Http\Controllers\ChambreController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::resource("/chambre", ChambreController::class)->middleware('auth');

Route::middleware(['checkRoomCount'])->group(function () {
    Route::get('/supprimer-chambre', 'ChambreController@supprimer');
});


 


require __DIR__.'/auth.php';
