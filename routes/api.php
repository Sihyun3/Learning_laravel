<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// 모든거 가져오는 getmapping
Route::get('board',[BoardController::class,'index'])->name('별 안중요한거');
Route::get('test',[BoardController::class,'test']);
Route::post('board/input',[BoardController::class,'store']);
Route::get('board/{board}',[BoardController::class,'show']);
Route::put('board/{board}',[BoardController::class,'update']);
Route::delete('board/{board}',[BoardController::class,'destroy']);
Route::get('board/data/{idx}',[BoardController::class,'test1']);