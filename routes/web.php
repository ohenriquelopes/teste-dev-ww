<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('ticket', [PageController::class, 'ticket'])->name('ticket');
Route::post('ticket', [PageController::class, 'cadastrar'])->name('cadastrar');
Route::get('relatorio', [PageController::class, 'relatorio'])->name('relatorio');
