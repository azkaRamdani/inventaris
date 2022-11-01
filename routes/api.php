<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DatatableController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/categories', [DatatableController::class, 'getCategory']);
    });
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/goods', [DatatableController::class, 'getGoods']);
    });
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/loans', [DatatableController::class, 'getLoans']);
    });
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/reports', [DataTableController::class, 'getReports']);
    });
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/report/damaged', [DataTableController::class, 'getReportDamaged']);
    });
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/report/lost', [DataTableController::class, 'getReportLost']);
    });
});