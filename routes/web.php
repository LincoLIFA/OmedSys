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


/*Gestion de citas*/
        Route::get('Citas/citas', 'CitasController@index');
        Route::get('Citas/aggcitas', 'CitasController@create');
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
        Route::put('ActualizarL/{id}', 'LitasController@update')->name('ActualizarL');
        Route::delete('DeleteL/{id}', 'ListasController@destroy')->name('DeleteL');
        Route::get('PerfilL/Paciente/{citPaciente}', 'PacientesController@showPerfilL')->name('PerfilPL');
/*fin de gestion de Lista de espera*/




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
        Route::get('Especialidades/Registro', 'EspecialidadesController@index')->name('Registro-especialidades');
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


        // Home General de Reserva de Citas
        Route::get('/home', 'HomeController@index')->name('Home.C');

        
        // Home para Gestion Financiera 
        Route::get('/Finanzas', 'HomeController@indexF')->name('Home.F');


        Route::get('/E/{id}', 'HomeController@indexE')->name('Home.E');
        Route::get('/P/{id}', 'HomeController@indexP')->name('Home.P');
       
        
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


/*Gestion de descuentos por caja*/
Route::get('Descuentos/Descuentos', 'DescuentosPorCajaController@index')->name('Registro-Descuentos');
Route::get('Descuentos/AggDescuentos', 'DescuentosPorCajaController@create')->name('Agregar-Descuentos');
Route::get('Descuentos/actDescuentos{id}', 'DescuentosPorCajaController@edit')->name('Update-Descuentos');
Route::post('/Agregar-Descuentos', 'DescuentosPorCajaController@store')->name('Agregar-nuevo-Descuentos');
Route::put('Actualizar-Descuentos/{id}', 'DescuentosPorCajaController@update')->name('Actualizar-Descuentos');
Route::delete('Delete-Descuentos/{id}', 'DescuentosPorCajaController@destroy')->name('Delete-Descuentos');
/*fin de gestion de descuentos por caja*/

/*Gestion de metodos de pago*/
Route::get('Metodos/Metodos', 'OpcionesDePagoController@index')->name('Registro-Metodos');
Route::get('Metodos/AggMetodos', 'OpcionesDePagoController@create')->name('Agregar-Metodos');
Route::get('Metodos/actMetodos{id}', 'OpcionesDePagoController@edit')->name('Update-Metodos');
Route::post('/Agregar-Metodos', 'OpcionesDePagoController@store')->name('Agregar-nuevo-Metodos');
Route::put('Actualizar-Metodos/{id}', 'OpcionesDePagoController@update')->name('Actualizar-Metodos');
Route::delete('Delete-Metodos/{id}', 'OpcionesDePagoController@destroy')->name('Delete-Metodos');
/*fin de gestion de metodos de pago*/


/*Gestion de aranceles*/
Route::get('Aranceles/Aranceles', 'ArancelesController@index')->name('Registro-Aranceles');
Route::get('Aranceles/AggAranceles', 'ArancelesController@create')->name('Agregar-Aranceles');
Route::get('Aranceles/actAranceles{id}', 'ArancelesController@edit')->name('Update-Aranceles');
Route::post('/Agregar-Aranceles', 'ArancelesController@store')->name('Agregar-nuevo-Aranceles');
Route::put('Actualizar-Aranceles/{id}', 'ArancelesController@update')->name('Actualizar-Aranceles');
Route::delete('Delete-Aranceles/{id}', 'ArancelesController@destroy')->name('Delete-Aranceles');
/*fin de gestion  aranceles*/

Route::get('ficha', function () {
        return view('ficha.fichamedica.aranceles');
    });