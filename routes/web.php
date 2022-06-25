<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;
use App\Http\Controller\ArticleController;
use App\Http\Controller\CategoryController;

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


// Auth Route
Auth::routes();

// Welcome route
Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');

// Detail Route
Route::get('/detail/{article}', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');

// Dashboard Route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Create Category Route
Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
Route::post('/category/create', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');

// Edit category Route
Route::get('/category/edit', [App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');
Route::get('/category/detail/{category}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
Route::patch('/category/detail/{category}', [App\Http\Controllers\CategoryController::class, 'update']);

// Delete Category Route
Route::delete('/category/detail/{category}', [App\Http\Controllers\CategoryController::class, 'destroy']);

// Create Article Route
Route::get('/article/create', [App\Http\Controllers\ArticleController::class, 'create'])->name('article.create');
Route::post('/article/create', [App\Http\Controllers\ArticleController::class, 'store'])->name('article.store');

// Edit Article Route
Route::get('/article/edit', [App\Http\Controllers\ArticleController::class, 'show'])->name('article.show');
Route::get('/article/detail/{article}', [App\Http\Controllers\ArticleController::class, 'edit'])->name('article.edit');
Route::patch('/article/detail/{article}', [App\Http\Controllers\ArticleController::class, 'update']);

// Delete Article Route
Route::delete('/article/detail/{article}', [App\Http\Controllers\ArticleController::class, 'destroy']);