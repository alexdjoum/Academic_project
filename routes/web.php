<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\EventsController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/myevent', [EventsController::class, 'index']);
Route::get('events/{id}', [EventsController::class, 'show']);
Route::get(
    'events/category/{category}/{subcategory}',
    [EventsController::class, 'category']
);
Route::get('/testdatabase', [WelcomeController::class, 'testdatabase']);
/*Route::get('/', 'WelcomeController@index');*/