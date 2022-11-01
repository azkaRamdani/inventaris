<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\LoansController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Route Middleware Guest
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::group([
    'namespace'  => 'App',
    'middleware' => ['guest'],
], function()
{
    Route::prefix('login')->group(function()
    {
        Route::get('/', [AuthController::class, 'index'])->name('login');
        Route::post('/', [AuthController::class, 'authenticate']);
    });
    
    Route::prefix('register')->group(function()
    {
        Route::get('/', [AuthController::class, 'register']);
        Route::post('/', [AuthController::class, 'store']);
    });
    
    Route::prefix('activation')->group(function()
    {
        Route::get('/{token}', [AuthController::class, 'activation']);
        Route::post('/{token}', [AuthController::class, 'activate']);
    });

    Route::prefix('forgot-password')->group(function()
    {
        Route::get('/', [AuthController::class, 'forgotPassword']);
        Route::post('/', [AuthController::class, 'mailReset']);
    });

    Route::prefix('reset-password')->group(function()
    {
        Route::get('/{token}', [AuthController::class, 'resetPassword']);
        Route::post('/{token}', [AuthController::class, 'mailReset']);
    });
});

/*
|--------------------------------------------------------------------------
| Route Middleware Auth
|--------------------------------------------------------------------------
|
*/
Route::group([
    'namespace'     =>  'APP',
    'middleware'    =>  ['auth']
], function(){
    
    Route::get('/logout', [AuthController::class, 'logout']);
    
    
});


Route::prefix('account')->group(function()
{
    Route::get('/', [AccountController::class, 'index']);    
    Route::post('/', [AccountController::class, 'update']);    
    Route::get('/password', [AccountController::class, 'password']);    
    Route::post('/{id}/password', [AccountController::class, 'updatePassword']);    
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::group(
    [
        'namespace'    =>  'APP',
    ],  function()
    {
        Route::prefix('category')->group(function(){
            Route::get('/', [CategoryController::class, 'index']);
            Route::get('/create', [CategoryController::class, 'create']);            
            Route::post('/store', [CategoryController::class, 'store']);          
            Route::get('/{id}', [CategoryController::class, 'index']);
            Route::get('/{id}/edit', [CategoryController::class, 'edit']);
            Route::post('/{id}/update', [CategoryController::class, 'update']);
            Route::get('/{id}/delete', [CategoryController::class, 'delete']);
        });

        Route::prefix('goods')->group(function(){
            Route::get('/', [GoodsController::class, 'index']);
            Route::get('/create', [GoodsController::class, 'create']);
            Route::post('/store', [GoodsController::class, 'store']);
            Route::get('/{id}', [GoodsController::class, 'index']);
            Route::get('/{id}/edit', [GoodsController::class, 'edit']);
            Route::post('/{id}/update', [GoodsController::class, 'update']);
            Route::get('/{id}/delete', [GoodsController::class, 'delete']);
        });
        
        
        Route::prefix('loans')->group(function(){
            Route::get('/', [LoansController::class, 'index']);
            Route::get('/create', [LoansController::class, 'create']);
            Route::post('/store', [LoansController::class, 'store']);
            Route::get('/{id}', [LoansController::class, 'index']);
            Route::get('/{id}/edit', [LoansController::class, 'edit']);
            Route::post('/{id}/update', [LoansController::class, 'update']);
            Route::get('/{id}/delete', [LoansController::class, 'delete']);
        });

        Route::prefix('reports')->group(function(){
            Route::get('/', [ReportsController::class, 'index']);
            Route::get('/create', [ReportsController::class, 'create']);
            Route::post('/store', [ReportsController::class, 'store']);
            Route::get('/{id}', [ReportsController::class, 'index']);
            Route::get('/{id}/edit', [ReportsController::class, 'edit']);
            Route::post('/{id}/update', [ReportsController::class, 'update']);
            Route::get('/{id}/delete', [ReportsController::class, 'delete']);
        });
});