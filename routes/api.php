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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function () {
    Route::any('addPost', 'Api\v1\PostController@create');
    Route::any('getPostsByScoreAvg', 'Api\v1\PostController@getPostsByScoreAvg');
    Route::any('setRatingPost', 'Api\v1\RatingController@setRate');
});
