<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\WriterController;
use Faker\Provider\Lorem;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');


Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('article/category/{category}', [ArticleController::class, 'byCategory'])->name('article.byCategory');

Route::get('article/author/{user}', [ArticleController::class, 'byUser'])->name('article.byUser');


Route::get('/careers', [PublicController::class, 'careers'])->name('careers');

Route::post('/careers/submit', [PublicController::class, 'careersSubmit'])->name('careers.submit');


// grouping ADMIN   
Route::middleware('admin')->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::patch('/admin/{user}/set-admin', [AdminController::class, 'setAdmin'])->name('admin.setAdmin');

    Route::patch('/admin/{user}/set-revisor', [AdminController::class, 'setRevisor'])->name('admin.setRevisor');

    Route::patch('/admin/{user}/set-writer', [AdminController::class, 'setWriter'])->name('admin.setWriter');

    Route::put('/admin/edit/tag/{tag}', [AdminController::class, 'editTag'])->name('admin.editTag');

    Route::delete('admin/delete/tag/{tag}', [AdminController::class, 'deleteTag'])->name('admin.deleteTag');

    Route::put('/admin/edit/category/{category}', [AdminController::class, 'editCategory'])->name('admin.editCategory');

    Route::delete('admin/delete/category/{category}', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');

    Route::post('/admin/category/store', [AdminController::class, 'storecategory'])->name('admin.storeCategory');
});

// GROUPING REVISOR

Route::middleware('revisor')->group(function () {

    Route::get('/revisor/dashboard', [RevisorController::class, 'dashboard'])->name('revisor.dashboard');

    Route::post('/revisor/{article}/accept', [RevisorController::class, 'acceptArticle'])->name('revisor.acceptArticle');

    Route::post('/revisor/{article}/reject', [RevisorController::class, 'rejectArticle'])->name('revisor.rejectArticle');

    Route::post('/revisor/{article}/undo', [RevisorController::class, 'undoArticle'])->name('revisor.undoArticle');
});

// GROUPING WRITER
Route::middleware('writer')->group(function () {

    Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create');

    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');

    Route::get('/writer/dashboard', [WriterController::class, 'dashboard'])->name('writer.dashboard');

    Route::get('/articles/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');

    Route::put('/article/update/{article}', [ArticleController::class, 'update'])->name('article.update');

    route::delete('/article/destroy/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');
});


// ROTTA CHE GESTISCE I DATI INSERITI NELLA BARRA DI RICERCA
Route::get('/article/search', [ArticleController::class, 'articleSearch'])->name('article.search');

// TEST ERRORE 503 
// Route::get('/test-503', function () {
//     abort(503);
// });
