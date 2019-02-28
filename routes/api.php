<?php

use Illuminate\Http\Request;

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

Route::post('/promotion',[
    'uses' => 'PromotionController@postPromotion'
]);

Route::get('/promotions',[
    'uses' => 'PromotionController@getPromotions'
]);

Route::put('/promotion/{id}',[
    'uses' => 'PromotionController@putPromotion'
]);

Route::delete('/promotion/{id}',[
    'uses' => 'PromotionController@deletePromotion'
]);
