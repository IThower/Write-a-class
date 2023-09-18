<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;

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
// admin sectiion 

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

});
Route::prefix('professor')->middleware(['auth', 'isProfessor'])->group(function () {

    Route::get('/dashboardP', [App\Http\Controllers\HomeController::class, 'dashboardP'])->name('dashboardP');
    Route::get('/new-class', [App\Http\Controllers\HomeController::class, 'newClass'])->name('newClass');

});
Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('/home');
Auth::routes();

// Rotas que não exigem autenticação (rotas públicas)
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contato', [App\Http\Controllers\HomeController::class, 'contato'])->name('contato');


// Rotas que exigem autenticação
Route::middleware(['auth'])->group(function () {

    //profile ------------------------------------
    Route::get('/profile', [ProfileController::class, 'perfil'])->name('perfil');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('perfil.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('perfil.update');


    // posts ------------------------------------
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('post.show');

    Route::get('/all/posts', [PostController::class, 'all_posts'])->name('blog');
    Route::post('/posts/{post}/isAproved', [PostController::class, 'isAproved'])->name('post.isAproved');

    Route::resource('posts', PostController::class);
});




// Rotas que exigem autenticação
// ... outras rotas que requerem autenticação ...
