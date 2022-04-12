<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;

use App\Models\Product;
use Illuminate\Routing\Router;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function(Request $request) {
    $response = new Response(json_encode(['msg' => 'Hello World!!!']));
    $response->header('Content-type', 'application/json');

    return $response;
});

Route::namespace('App\Http\Controllers\Api')->group(function() {
    
    Route::get('/produtos', 'ProductController@index');
    Route::post('/produtos', 'ProductController@save');
    Route::get('/produtos/{id}', 'ProductController@show');
    Route::put('/produtos', 'ProductController@update');
    Route::patch('/produtos', 'ProductController@update');
    Route::delete('/produtos/{id}', 'ProductController@destroy');
    

});
