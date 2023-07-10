<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AwardAchievementController;
use App\Http\Controllers\ChangeMakingProjectController;
use App\Http\Controllers\DashboardController;

Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin'])->group(function(){
        Route::view('/login', 'auth.login')->name('login');
        Route::post('/login_handler', [AdminController::class, 'loginHandler'])->name('login_handler');
    });

    Route::middleware(['auth:admin'])->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout_handler', [AdminController::class, 'logoutHandler'])->name('logout_handler');

        // Change Making Project
        Route::controller(ChangeMakingProjectController::class)->group(function () {
            Route::get('/change-making-project', 'index')->name('change_making_project');
            Route::get('/change-making-project/data', 'getChangeMakingProject')->name('data_change_making_project');
            Route::get('/change-making-project/create', 'create')->name('create_change_making_project');
            Route::post('/change-making-project/store', 'store')->name('store_change_making_project');
            Route::get('/change-making-project/{id}/edit', 'edit')->name('edit_change_making_project');
            Route::post('/change-making-project/{id}/update', 'update')->name('update_change_making_project');
            Route::post('/change-making-project/delete/{id}', 'delete')->name('delete_change_making_project');
            Route::post('/change-making-project/highlight/{id}', 'set_highlight')->name('highlight_change_making_project');
        });

        // Award & Achievement
        Route::controller(AwardAchievementController::class)->group(function () {
            Route::get('/award-achievement', 'index')->name('award_achievement');
            // Route::get('/change-making-project/data', 'getChangeMakingProject')->name('data_change_making_project');
            // Route::get('/change-making-project/create', 'create')->name('create_change_making_project');
            // Route::post('/change-making-project/store', 'store')->name('store_change_making_project');
            // Route::get('/change-making-project/{id}/edit', 'edit')->name('edit_change_making_project');
            // Route::post('/change-making-project/{id}/update', 'update')->name('update_change_making_project');
            // Route::post('/change-making-project/delete/{id}', 'delete')->name('delete_change_making_project');
            // Route::post('/change-making-project/highlight/{id}', 'set_highlight')->name('highlight_change_making_project');
        });
    });
});