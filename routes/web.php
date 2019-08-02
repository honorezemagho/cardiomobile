<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('home.content');
//});

    Route::get('/', 'IndexController@index');
    Route::get('/manual', function(){
        return view('home.manual');
    });

    Route::get('states/get/{id}', 'IndexController@getStates');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/itineraire', 'ItineraireController');

    Route::get('/contact', function (){
        return view('contact.create ');
    });

    Route::resource('/urgence/confirm_disponibility', 'MedecinConfirmDisponibilityController');

    Route::get('/urgence/confirm-disponibility/{operation}/{matricule}/{medecin_phone}', 'MedecinValidateDisponibilityController@update');

    Route::resource('/contact/medecin', 'ClientContactMedecinController');

    Route::post('/medecin/receiving', 'UrgenceFormReceivingController@store');


    Route::post('/contact/clinique', 'ClientContactCliniqueController@store');


    Route::post('/test/contact/clinique', 'TestClientContactCliniqueController@store');


/*Route::resource('admin/users', 'AdminUsersController');

Route::resource('admin/posts', 'AdminPostsController');*/



    Route::get('/admin', function(){

        return view('admin.index');

    });

    Route::group(['middleware' => 'admin'], function (){

        Route::resource('admin/users', 'AdminUsersController');
        Route::resource('admin/posts', 'AdminPostsController');
        Route::resource('admin/ville', 'AdminVilleController');
        Route::resource('admin/quartier', 'AdminQuartierController');
        Route::get('/home', 'HomeController@index');

    });

    Route::group(['middleware' => 'gestionnaire'], function (){

        Route::resource('admin/hopital', 'AdminHopitalController');

        Route::resource('admin/ambulance', 'AdminAmbulanceController');

        Route::resource('admin/vehicule', 'AdminVehiculesController');

        Route::resource('admin/medecin', 'AdminMedecinController');

        Route::resource('admin/itineraire', 'AdminItineraireController');

        Route::resource('admin/contact/medecin', 'AdminContactMedecinController');

    });

Route::resource('admin/urgences', 'AdminContactMedecinController');

Route::auth();

