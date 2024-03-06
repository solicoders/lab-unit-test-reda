<?php

use App\Http\Controllers\Questions\QuestionsController;
use App\Http\Controllers\Tests\TestsController;
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
    return view('welcome');
});


Route::get('/tests', [TestsController::class, 'index'])->name('tests.index');
Route::get('/question', [QuestionsController::class, 'index'])->name('questions.index');
Route::get('/question/show/{id}', [QuestionsController::class, 'show'])->name('questions.show');
Route::get('/question/create', [QuestionsController::class, 'create'])->name('questions.create');
Route::post('/question/store', [QuestionsController::class, 'store'])->name('questions.store');
