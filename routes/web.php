<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    $posts = Post::all();
    return view('dashboard', compact('posts'));
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/post', function () {
    return view('page.post');
})->name('post');

Route::get('/detail', function () {
    return view('page.detail');
})->name('detail');



// Route::get('/post', [PostController::class, 'index']);
// Route::get('/popst/create', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'store']);





// Route::get('/user',[UserController::class, 'index'])->name('user');
// Route::get('/user/create',[UserController::class, 'create']);
// Route::post('/user/store',[UserController::class, 'store']);
// Route::get('/user/{id}/edit',[UserController::class, 'edit']);
// Route::put('/user/{id}',[UserController::class, 'update']);
// Route::delete('/user/{id}',[UserController::class, 'destroy']);