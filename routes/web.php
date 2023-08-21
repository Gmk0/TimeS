<?php

use App\Http\Controllers\ProfileController;
use App\Models\Professeur;
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

Route::get('/', function () {

    $professeurs = Professeur::take(10)->get();
    return view('web.home', ['professeurs' => $professeurs]);
});

Route::get('/apropos', function () {
    return view('web.about');
});

Route::get('/professeur', \App\Livewire\Professeur::class);

Route::get('/professeur/{id}', \App\Livewire\ProfesseurOne::class)->name('professeurOne');


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