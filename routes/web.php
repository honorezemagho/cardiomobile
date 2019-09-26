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



    Route::get('/', 'IndexController@index');

    Route::get('/manual', 'IndexController@manual');

    Route::get('states/get/{id}', 'IndexController@getStates');

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/itineraire', 'ItineraireController');

    Route::get('/contact', 'IndexController@contact');


    Route::prefix('urgence')->group(function () {

        Route::get('/confirm-disponibility/{operation}/{matricule}/{medecin_phone}', 'MedecinValidateDisponibilityController@update');

        Route::resource('/contact/medecin', 'UrgenceFormReceivingMedecinController');

        Route::resource('/receiving/clinique', 'UrgenceFormReceivingCliniqueController');

        Route::post('/receiving/clinique/save', 'UrgenceFormReceivingCliniqueController@save');

        Route::get('/receiving/clinique/save/paginate', 'UrgenceFormReceivingCliniqueController@cardiologue');

        Route::post('/receiving/domicile', 'UrgenceFormReceivingController@store');

        Route::get('/disponibility', 'IndexController@disponibility');

        Route::get('/speciality', 'IndexController@speciality');

        Route::get('/cardiologue', 'UrgenceFormReceivingCliniqueController@cardiologue');

    });


        Route::get('/paginate', 'IndexController@paginate');

   /* Route::resource('/client/contact/clinique', 'ClientContactMedecinCliniqueController');
    Route::resource('/client/contact/clinique/form/receiving', 'ReceivingCliniquedataController');

    Route::get('/payments/status', function (){
    return view('payments.now');
    });

    Route::post('/payments/now', 'PaymentController@now');

Route::post('/payments/pay', 'PaymentController@pay');

    Route::post('/payments/finish', 'PaymentController@finish');*/



/*Route::resource('admin/users', 'AdminUsersController');

Route::resource('admin/posts', 'AdminPostsController');*/


    Route::get('/admin', 'IndexController@admin')->middleware('auth');

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
        Route::resource('/admin/prices', 'PriceController');
    });


    Route::group(['middleware' => ['gestionnaire', 'auth']], function (){

        Route::resource('admin/hopital', 'AdminHopitalController');

        Route::resource('admin/ambulance', 'AdminAmbulanceController');

        Route::resource('admin/speciality', 'SpecialityController');

        Route::resource('admin/vehicule', 'AdminVehiculesController');

        Route::get('quartier/get/{id}', 'AdminMedecinController@getStates');

        Route::resource('admin/medecin', 'AdminMedecinController');

        Route::resource('admin/itineraire', 'AdminItineraireController');

        Route::resource('admin/contact/medecin', 'AdminContactMedecinController');

        Route::resource('admin/becomeuser/medecin', 'GiveMedecinAccessToAdminController');
    });

        Auth::routes(['register' => false]);

