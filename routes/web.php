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

use Illuminate\Support\Facades\Auth;

    Route::get('/', 'IndexController@index');

    Route::get('/manual', function(){
        return view('home.manual');
    });

    Route::get('states/get/{id}', 'IndexController@getStates');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/itineraire', 'ItineraireController');

    Route::get('/contact', function (){
        return view('contact.create');
    });

    Route::resource('/urgence/confirm_disponibility', 'MedecinConfirmDisponibilityController');

    Route::get('/urgence/confirm-disponibility/{operation}/{matricule}/{medecin_phone}', 'MedecinValidateDisponibilityController@update');

    Route::resource('/contact/medecin', 'ClientContactMedecinController');

    Route::post('/urgence/receiving/clinique', 'Urgenceformreceivingclinique@store');

    Route::post('/urgence/receiving/domicile', 'UrgenceFormReceivingController@store');


    Route::post('/contact/clinique', 'ClientContactCliniqueController@store');

    Route::post('/test/contact/clinique', 'TestClientContactCliniqueController@store');

    Route::get('/payments/status', function (){
    return view('payments.now');
    });

    Route::post('/payments/now', 'PaymentController@now');

    Route::post('/payments/finish', 'PaymentController@finish');



/*Route::resource('admin/users', 'AdminUsersController');

Route::resource('admin/posts', 'AdminPostsController');*/

    Route::get('/admin', function(){
    return view('admin.index');
    })->middleware('auth');;


    Route::group(['middleware' => ['medecin', 'auth']], function (){

    Route::resource('admin/urgences', 'AdminContactMedecinController');
    Route::resource('admin/medecin/available', 'MedecinDisponibilityController');

    });

    Route::group(['middleware' => ['admin', 'auth']], function (){

        Route::resource('admin/users', 'AdminUsersController');
        Route::resource('admin/posts', 'AdminPostsController');
        Route::resource('admin/ville', 'AdminVilleController');
        Route::resource('admin/quartier', 'AdminQuartierController');
        Route::get('/home', 'HomeController@index');
        Route::resource('/admin/roles', 'AdminRolesController');
        Route::resource('/admin/payments', 'PaymentController');
    });


    Route::group(['middleware' => ['gestionnaire', 'auth']], function (){

        Route::resource('admin/hopital', 'AdminHopitalController');

        Route::resource('admin/ambulance', 'AdminAmbulanceController');

        Route::resource('admin/vehicule', 'AdminVehiculesController');

        Route::resource('admin/medecin', 'AdminMedecinController');

        Route::resource('admin/itineraire', 'AdminItineraireController');

        Route::resource('admin/contact/medecin', 'AdminContactMedecinController');

        Route::resource('admin/becomeuser/medecin', 'GiveMedecinAccessToAdminController');
    });

        Auth::routes(['register' => false, 'reset' => false]);



