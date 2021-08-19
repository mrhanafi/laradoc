<?php

use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('documents/search', [DocumentController::class, 'search'])->name('documents.search')->middleware('auth');
Route::get('documents/download/{id}', [DocumentController::class, 'download'])->name('documents.download')->middleware('auth');
Route::resource('documents', DocumentController::class)->middleware('auth');

require __DIR__ . '/auth.php';
