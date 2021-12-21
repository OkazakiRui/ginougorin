<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KurasuController;

use App\Models\admin;

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

Route::apiResource("class", KurasuController::class);
Route::get('search', [KurasuController::class, "search"]);
Route::get('search/{id}', [KurasuController::class, "searchBihin"]);
Route::post('login', function (Request $request) {
    // return admin::where("account", $request->account)->where("password", $request->password);
    if ("admin" == $request->account && "gorin" == $request->password) {
        return response()->json(["isLogin"=>"isLogin"], 200);
    }
    return response()->json([], 404);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
