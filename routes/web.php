<?php
use App\Http\Controllers\LawyerController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;

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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::resource('categories', CategoryController::class)->except(['create', 'show', 'edit']);
Route::resource('lawyers', LawyerController::class);


use App\Http\Controllers\ChatBotController;

Route::post('/send-message', [ChatBotController::class, 'sendMessage']);
Route::middleware(['auth'])->group(function () {
    Route::post('/store-message', [ChatBotController::class, 'storeChat']);
    Route::get('/previous-chats', [ChatBotController::class, 'getPreviousChats']);
});

Route::get('/chat', function () {
    return view('chat');
});

use App\Http\Controllers\LawController;

Route::get('/laws', [LawController::class, 'index']);
Route::post('/laws-by-category', [LawController::class, 'getLawsByCategory']);


require __DIR__.'/auth.php';
