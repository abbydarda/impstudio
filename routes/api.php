<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerchantsController;
use App\Http\Controllers\ProductsController;
use App\Models\Merchants;
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

Route::post('/tokens/create', function (Request $request) {
    $merchants = Merchants::where('id',1)->first();
    $token = $merchants->createToken('token-name')->plainTextToken;
    return response()->json(['token' => $token]);
});

Route::middleware('authMid')->group(function () {
    Route::get('/merchant', [MerchantsController::class, 'all']);
    Route::get('/merchant/{id}', [MerchantsController::class, 'get']);
    Route::post('/merchant', [MerchantsController::class, 'create']);
    Route::put('/merchant/{id}', [MerchantsController::class, 'update']);
    Route::delete('/merchant/{id}', [MerchantsController::class, 'delete']);

    Route::get('product', [ProductsController::class, 'all']); 
    Route::get('product/{id}', [ProductsController::class, 'get']);
    Route::post('product', [ProductsController::class, 'create']);
    Route::put('product/{id}', [ProductsController::class, 'update']);
    Route::delete('product/{id}', [ProductsController::class, 'delete']);
});
