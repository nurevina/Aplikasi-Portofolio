<?php

use App\Http\Controllers\Api\AdminRESTController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

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

Route::prefix('v1')->group(function(){
    Route::prefix('auth')->group(function(){
        Route::post('register', [AuthController::class, 'register']);
        Route::get('login', [AuthController::class, 'login']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']);
    });
    // Route::get('/portfolio', [AdminRESTController::class, 'index']);
    // Route::post('/portfolio', [AdminRESTController::class, 'store']);
    // Route::put('/portfolio', [AdminRESTController::class, 'index']);
    // Route::delete('/portfolio', [AdminRESTController::class, 'destroy']);
    
    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('portfolio',AdminRESTController::class,[
            'as' => 'api'
        ]);
    });
});



// Route::get('/admin', [AdminController::class, 'index']);

// Route::post('/admin/store', [AdminController::class, 'store']);

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/product', [AdminController::class, 'data_product']);

// Route::get('/admin/destroy/{id}', 'App\Http\Controllers\AdminController@destroy');
