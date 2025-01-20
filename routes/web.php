<?php

use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('/admin')->name('admin.')->group(function () {
    // Route::get('/projects', [AdminProjectController::class, 'index'])->name('projects.index');
    // Route::get('/projects/create', [AdminProjectController::class, 'create'])->name('projects.create');
    // Route::get('/projects/{id}', [AdminProjectController::class, 'show'])->name('projects.show');
    // Route::post('/projects', [AdminProjectController::class, 'store'])->name('projects.store');

    Route::resource('projects', AdminProjectController::class);
});

