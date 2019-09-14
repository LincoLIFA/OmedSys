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
    return view('welcome');
});

Route::get('toma1', function () {
    return view('SebaPrueba');

});

Route::get('puto', function () {
    return view('Prueba5');
});

Route::get('hola', function () {
    return view('prueba1');
});

/*Gestion de citas*/
        Route::get('Citas/citas', 'CitasController@index');
        Route::get('Citas/aggcitas', 'CitasController@create');
        Route::get('Citas/actcitas/{id}', 'CitasController@edit')->name('UpdateC');
        Route::post('/Agregar', 'CitasController@store')->name('AgregarC');
        Route::put('ActualizarC/{id}', 'CitasController@update')->name('ActualizarC');
        Route::delete('DeleteC/{id}', 'CitasController@destroy')->name('DeleteC');
        Route::get('PerfilC/Paciente/{citPaciente}', 'PacientesController@showPerfil')->name('PerfilPC');
/*fin de gestion de citas*/
/* Eventos*/
        Route::get('Eventos/Get', 'EventsController@getEvents')->name('Evento');
        Route::post('Reservar', 'EventsController@create')->name('Reservar');
        Route::get('Eventos/GetP', 'EventsController@getEventsForP')->name('EventoP');

/*Gestion de Especialistas*/
        Route::get('Especialistas/Registro', 'EspecialistasController@index');
        Route::get('Especialistas/New', 'EspecialistasController@create');
        Route::get('Especialistas/Update/{id}', 'EspecialistasController@edit')->name('UpdateE');
        Route::get('Perfil/Especialista/{id}', 'EspecialistasController@showPerfil')->name('PerfilE');
        Route::post('agregarE', 'EspecialistasController@store');
        Route::put('ActualizarE/{id}', 'EspecialistasController@update')->name('ActualizarE');
        Route::delete('DeleteE/{id}', 'EspecialistasController@destroy')->name('DeleteE');
/*fin de gestion de Especialistas*/

/*Gestion de Especialidades*/
        Route::get('Especialidades/Registro', 'EspecialidadesController@index');
        Route::get('Especialidades/New', 'EspecialidadesController@create');
        Route::get('Especialidades/Update/{id}', 'EspecialidadesController@edit')->name('UpdateA');
        Route::post('agregarA', 'EspecialidadesController@store');
        Route::put('ActualizarA/{id}', 'EspecialidadesController@update')->name('ActualizarA');
        Route::delete('DeleteA/{id}', 'EspecialidadesController@destroy')->name('DeleteA');
        
/*fin de gestion de Especialidades*/

/*Gestion de Pacientes*/
        Route::get('Pacientes/Registro', 'PacientesController@index');
        Route::get('Pacientes/New', 'PacientesController@create');
        Route::get('Pacientes/Update/{id}', 'PacientesController@edit')->name('UpdateP');
        Route::get('Perfil/Paciente/{id}', 'PacientesController@showPerfil')->name('PerfilP');
        Route::post('/agregarP', 'PacientesController@store')->name('AgregarP');
        Route::put('AactualizarP/{id}', 'PacientesController@update')->name('ActualizarP');
        Route::delete('DeleteP/{id}', 'PacientesController@destroy')->name('DeleteP');
/*fin de gestion de Pacientes*/

/*Gestion de Usuarios*/
        Route::get('Usuarios/Registro', 'UsuariosController@index');
        Route::get('Usuarios/New', 'UsuariosController@create');
        Route::get('Usuarios/Update', 'UsuariosController@edit');
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

        Route::get('/home', 'HomeController@index')->name('Home.C');
        Route::get('/E/{id}', 'HomeController@indexE')->name('Home.E');
        Route::get('/P/{id}', 'HomeController@indexP')->name('Home.P');
       
        
/*Rutas para Auth con redes sociales*/

        Route::get('login/google', 'Auth\LoginController@redirectToProvider')->name('login.google');
        Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
        

