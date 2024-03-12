<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\TodoController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('features', [HomeController::class, 'features']);
Route::get('blog', [HomeController::class, 'blog']);
Route::get('contact', [HomeController::class, 'contact']);


Route::resource('todo', TodoController::class)->except('show', 'create');
// Route::get('todo', [TodoController::class, 'index'])->name('todo.index');
// Route::post('todo', [TodoController::class, 'store']);
// Route::put('todo/{todo}', [TodoController::class, 'update']);
// Route::delete('todo/{todo}', [TodoController::class, 'store']);

Route::get('quote', [QuoteController::class, 'index']);
