<?php

use App\Http\Controllers\Api\{
    AuthController,
    FcmTokenController,
    FollowerController,
    ProductController,
    WishlistController
};
use Illuminate\Support\Facades\Route;

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

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/reset_password', [AuthController::class, 'resetPasswordEmail']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/fcm_tokens', [FcmTokenController::class, '__invoke']);

    Route::apiResources([
        'followers' => FollowerController::class,
        'products' => ProductController::class,
        'carts' => WishlistController::class
    ]);
});
