<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

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
    return view('pages.home');
});

Route::get('/animals', [AnimalController::class, 'index']) -> name('admin.animals.index');
Route::get('/animals/create', [AnimalController::class, 'create']) -> name('admin.animals.create');
Route::post('/animals', [AnimalController::class, 'store']) -> name('animals.store');

Route::get('/animals/{animal}/edit', [AnimalController::class, 'edit']) -> name('admin.animals.edit');

Route::put('/animals/{animal}', [AnimalController::class, 'update']) -> name('admin.animals.update'); // quando voglio cambiare il dominiocompletamente

Route::delete('/animals/{animal}', [AnimalController::class, 'destroy']) -> name('admin.animals.destroy');

Route::get('/animals/{animal}', [AnimalController::class, 'show']) -> name('admin.animals.show');

// Route::resource('/animals', AnimalController::class);