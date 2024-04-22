<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppartementController;
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
    return view('welcome');
});

Route::get('/appartements', [AppartementController::class, 'index'])->name('appartements.index');
Route::get('/appartements/{appartement}', [AppartementController::class, 'show'])->name('appartements.show');

Route::get('/confirmation-location', function () {
    return view('confirmation-location');
})->name('confirmation-location');


Route::get('/confirmation-achat', function () {
    return view('confirmation-achat');
})->name('confirmation-achat');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/appartements');
    })->name('dashboard'); // Nommez la route dashboard plutôt que appartements.index
});
