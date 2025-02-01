<?php

use App\Http\Actions\PostIndexAction;
use App\Http\Actions\PostCreateAction;
use App\Http\Actions\PostEditAction;
use App\Http\Actions\PostStoreAction;
use App\Http\Actions\PostUpdateAction;
use App\Http\Actions\PostDeleteAction;
use App\Http\Actions\UserIndexAction;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//ユーザー一覧画面を表示
Route::get('/user', UserIndexAction::class);
//投稿一覧画面を表示
Route::get('/posts', PostIndexAction::class)->name('posts.index');
//投稿画面を表示
Route::get('/posts/registration', PostCreateAction::class)->name('posts.create');
//投稿する
Route::post('/posts', PostStoreAction::class)->name('posts.store');
//投稿編集画面を表示
Route::get('/posts/{post}/edit', PostEditAction::class)->name('posts.edit');
//投稿を編集する
Route::put('/posts/{post}', PostUpdateAction::class)->name('posts.update');
//投稿を削除する
Route::delete('/posts/{id}', PostDeleteAction::class)->name('posts.destroy');



require __DIR__.'/auth.php';
