<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\LoansController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('layouts.auth');
// });

Route::get('/', [AuthController::class, 'login']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::get('/reset', [AuthController::class, 'reset']);
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
            Route::get('/{id}/update', [GoodsController::class, 'update']);
            Route::get('/{id}/delete', [GoodsController::class, 'delete']);
        });
        
        
        Route::prefix('loans')->group(function(){
            Route::get('/', [LoansController::class, 'index']);
            Route::get('/create', [LoansController::class, 'create']);
            Route::get('/store', [LoansController::class, 'store']);
            Route::get('/{id}', [LoansController::class, 'index']);
            Route::get('/{id}/edit', [LoansController::class, 'edit']);
            Route::get('/{id}/update', [LoansController::class, 'update']);
            Route::get('/{id}/delete', [LoansController::class, 'delete']);
        });

        Route::prefix('reports')->group(function(){
            Route::get('/', [ReportsController::class, 'index']);
            Route::get('/{id}', [ReportsController::class, 'index']);
            Route::get('/{id}/edit', [ReportsController::class, 'index']);
            Route::get('/{id}/delete', [ReportsController::class, 'index']);
        });
});