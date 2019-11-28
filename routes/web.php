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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/prueba', function () {
        return view('ficha.categorias.registro');
    });
    Route::get('/prueba2', function () {
        return view('ficha.fichamedica.fichamedica');
    });


Auth::routes(['verify' => true]);



/*Gestion de citas*/
        Route::get('Citas/citas', 'CitasController@index')->name('Citas');
        Route::get('Citas/aggcitas', 'CitasController@create')->name('Agregar-citas-vista');
        Route::get('Citas/actcitas/{id}', 'CitasController@edit')->name('UpdateC');
        Route::post('Citas/Agregar', 'CitasController@store')->name('AgregarC');
        Route::put('ActualizarC/{id}', 'CitasController@update')->name('ActualizarC');
        Route::delete('DeleteC/{id}', 'CitasController@destroy')->name('DeleteC');
        Route::get('PerfilC/Paciente/{citPaciente}', 'PacientesController@showPerfil')->name('PerfilPC');
/*fin de gestion de citas*/
/*Gestion de Lista de espera */
        Route::get('Lista/lista', 'ListasController@index')->name('RegistroL');
        Route::get('Lista/agglista', 'ListasController@create')->name('AggLista');
        Route::get('Lista/actlista/{id}', 'ListasController@edit')->name('UpdateL');
        Route::post('/Agregar', 'ListasController@store')->name('AgregarL');
        Route::put('ActualizarL/{id}', 'ListasController@update')->name('ActualizarL');
        Route::delete('DeleteL/{id}', 'ListasController@destroy')->name('DeleteL');
        Route::get('PerfilL/Paciente/{citPaciente}', 'PacientesController@showPerfilL')->name('PerfilPL');
/*fin de gestion de Lista de espera*/




/* Eventos*/
        Route::get('Eventos/Get', 'EventsController@getEvents')->name('Evento');
        Route::post('Reservar', 'EventsController@create')->name('Reservar');
        Route::get('Eventos/GetP', 'EventsController@getEventsForP')->name('EventoP');

/*Gestion de Especialistas*/
        Route::get('Especialistas/Registro', 'EspecialistasController@index')->name('RegistroE');
        Route::get('Especialistas/New', 'EspecialistasController@create')->name('AggEspecialista');
        Route::get('Especialistas/Update/{id}', 'EspecialistasController@edit')->name('UpdateE');
        Route::get('Perfil/Especialista/{id}', 'EspecialistasController@showPerfil')->name('PerfilE');
        Route::post('agregarE', 'EspecialistasController@store');
        Route::put('ActualizarE/{id}', 'EspecialistasController@update')->name('ActualizarE');
        Route::delete('DeleteE/{id}', 'EspecialistasController@destroy')->name('DeleteE');
/*fin de gestion de Especialistas*/

/*Gestion de Especialidades*/
        Route::get('Especialidades/Registro', 'EspecialidadesController@index')->name('Registro-especialidades');
        Route::get('Especialidades/New', 'EspecialidadesController@create')->name('AggEspecialidades');
        Route::get('Especialidades/Update/{id}', 'EspecialidadesController@edit')->name('UpdateA');
        Route::post('agregarA', 'EspecialidadesController@store');
        Route::put('ActualizarA/{id}', 'EspecialidadesController@update')->name('ActualizarA');
        Route::delete('DeleteA/{id}', 'EspecialidadesController@destroy')->name('DeleteA');
        
/*fin de gestion de Especialidades*/

/*Gestion de Pacientes*/
        Route::get('Pacientes/Registro', 'PacientesController@index')->name('RegistroP');
        Route::get('Pacientes/New', 'PacientesController@create')->name('AggPacientes');
        Route::get('Pacientes/Update/{id}', 'PacientesController@edit')->name('UpdateP');
        Route::get('Perfil/Paciente/{id}', 'PacientesController@showPerfil')->name('PerfilP');
        Route::post('/agregarP', 'PacientesController@store')->name('AgregarP');
        Route::put('AactualizarP/{id}', 'PacientesController@update')->name('ActualizarP');
        Route::delete('DeleteP/{id}', 'PacientesController@destroy')->name('DeleteP');
/*fin de gestion de Pacientes*/

// Authentication Routes...
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Auth\LoginController@login');
        Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register');

        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


        // Home General de Reserva de Citas
        Route::get('/home', 'HomeController@index')->name('Home.C')->middleware('verified');

        
        // Home para Gestion Financiera 
        Route::get('/Finanzas', 'HomeController@indexF')->name('Home.F')->middleware('verified');


        Route::get('/E/{id}', 'HomeController@indexE')->name('Home.E')->middleware('verified');
        Route::get('/P/{id}', 'HomeController@indexP')->name('Home.P')->middleware('verified');
       
        
/*Rutas para Auth con redes sociales*/

        Route::get('login/google', 'Auth\LoginController@redirectToProvider')->name('login.google');
        Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
        
// --------------------------------------- RUTAS DE GESTION FINANCIERA ---------------------
// 
// *****************************************************************************************
/*Gestion de Convenios*/
Route::get('Convenios/Convenios', 'ConveniosController@index')->name('Registro-convenios');
Route::get('Convenios/Aggconvenios', 'ConveniosController@create')->name('Agregar-convenios');
Route::get('Convenios/actConvenios{id}', 'ConveniosController@edit')->name('Update-convenios');
Route::post('/Agregar-Convenios', 'ConveniosController@store')->name('Agregar-nuevo-convenio');
Route::put('Actualizar-Convenios/{id}', 'ConveniosController@update')->name('Actualizar-convenios');
Route::delete('Delete-Convenios/{id}', 'ConveniosController@destroy')->name('Delete-convenios');
/*fin de gestion de Convenios*/

/*Gestion de Medios de pago*/
Route::get('Medios/Medios_pago', 'OpcionesDePagoController@index')->name('Registro-Medios');
Route::get('Medios/Aggmedios', 'OpcionesDePagoController@create')->name('Agregar-Medios');
Route::get('Medios/actMedios{id}', 'OpcionesDePagoController@edit')->name('Update-Medios');
Route::post('/Agregar-Medios', 'OpcionesDePagoController@store')->name('Agregar-nuevo-Medios');
Route::put('Actualizar-Medios/{id}', 'OpcionesDePagoController@update')->name('Actualizar-Medios');
Route::delete('Delete-Medios/{id}', 'OpcionesDePagoController@destroy')->name('Delete-Medios');
/*fin de gestion de Medios de pago */
