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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::apiResource('/medecin', 'MedecinApiController' );

Route::get('/urgence/update/{id}/{medecin_phone}/{shortcode}/{matricule}' , 'MedecinReceivingRequest@update');

Route::apiResource('contact/medecin', 'UrgenceApiController' );

Route::prefix('v1')->group(function(){
    Route::get('login', 'Api\AuthController@login');
    Route::get('register', 'Api\AuthController@register');
    Route::post('login', 'Api\AuthController@login');
    Route::post('register', 'Api\AuthController@register');
    Route::group(['middleware' => 'auth:api'], function(){
    Route::post('getUser', 'Api\AuthController@getUser');
    });
});


