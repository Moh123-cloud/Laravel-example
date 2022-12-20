<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\simpleApi;
use App\Http\Controllers\dataApi;
use App\Http\Controllers\postApi;
use App\Http\Controllers\resourceController;
use App\Http\Controllers\uploadController;

/*
| --------------------------------------------------------------------------
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

//Route for inserting data in the Api 
Route::get("simple", [simpleApi::class, 'index']);

//Route for inserting data in the Api from database using get method
Route::get("data", [dataApi::class, 'index']);

//Route for inserting data in the Database from Api using post method
Route::post("post", [postApi::class, 'post']);

//Route for updtaing data in the Database using using put method Api
Route::put("put", [postApi::class, 'put']);

//Route for deleting data in the Database  using get method Api
Route::delete("delete/ {id}", [postApi::class, 'delete']);

//Route for searching data in the Database  using search method Api
Route::get("search/{name}", [postApi::class, 'search']);

// Api Validation
Route::post('validate', [postApi::class, 'index']);


//Resource route
Route::apiResource('resource', resourceController::class);

//Route for uploading a file
Route::post('upload', [uploadController::class,  'index']);