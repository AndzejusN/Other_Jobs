<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers;
use \App\Http\Controllers\Api\V2;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('/v1')->name('v1.')->group(function () {
    Route::prefix('/students')->name('students.')->group(function () {
        Route::get('/', [Controllers\StudentController::class, 'index'])->name('list');
        Route::get('/delete/{id}', [Controllers\StudentController::class, 'destroy'])->name('destroy');
        Route::post('/create', [Controllers\StudentController::class, 'create'])->name('create');
        Route::post('/modify', [Controllers\StudentController::class, 'modify'])->name('modify');
    });
    Route::prefix('/projects')->name('projects.')->group(function () {
        Route::get('/', [Controllers\ProjectController::class, 'index'])->name('list');
        Route::get('/project/{id?}', [Controllers\ProjectController::class, 'show'])->name('one');
        Route::get('/delete/{id}', [Controllers\ProjectController::class, 'destroy'])->name('destroy');
        Route::post('/create', [Controllers\ProjectController::class, 'create'])->name('create');
    });
    Route::prefix('/groups')->name('groups.')->group(function () {
        Route::get('/', [Controllers\GroupController::class, 'index'])->name('list');
        Route::get('/delete/{id}', [Controllers\GroupController::class, 'destroy'])->name('destroy');
        Route::post('/create', [Controllers\GroupController::class, 'create'])->name('create');
    });
});

Route::prefix('/v2')->name('v2.')->group(function () {
    Route::prefix('/students')->name('students.')->group(function () {
        Route::get('/', [V2\StudentController::class, 'index'])->name('list');
    });
    Route::prefix('/projects')->name('projects.')->group(function () {
        Route::get('/', [V2\ProjectController::class, 'index'])->name('list');
    });
    Route::prefix('/groups')->name('groups.')->group(function () {
        Route::get('/', [V2\GroupController::class, 'index'])->name('list');
    });
});
