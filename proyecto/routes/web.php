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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('admin');

//-------------------------------------------
//------------------Rutas--------------------
//-------------------------------------------

Route::middleware(['auth'])->group(function(){
        //Index - Admin
        Route::get('admin', function () {
        return view('admin.index');
        });
        //Roles
        Route::post('Roles/store','RolController@store')->name('Roles.store')
                ->middleware('permission:Roles.create');
        Route::get('Roles','RolController@index')->name('Roles.index')
                ->middleware('permission:Roles.index');
        Route::get('Roles/create','RolController@create')->name('Roles.create')
                ->middleware('permission:Roles.create');
        Route::put('Roles/{rol}','RolController@update')->name('Roles.update')
                ->middleware('permission:Roles.edit');
        Route::get('Roles/{rol}','RolController@show')->name('Roles.show')
                ->middleware('permission:Roles.show');
        Route::delete('Roles/{rol}','RolController@destroy')->name('Roles.destroy')
                ->middleware('permission:Roles.destroy');
        Route::get('Roles/{rol}/edit','RolController@edit')->name('Roles.edit')
                ->middleware('permission:Roles.edit');

        //Usuarios
        Route::post('Usuarios/store','UserController@store')->name('Usuarios.store')
        ->middleware('permission:Usuarios.create');
        Route::get('Usuarios','UserController@index')->name('Usuarios.index')
        ->middleware('permission:Usuarios.index');
        Route::get('Usuarios/create','UserController@create')->name('Usuarios.create')
        ->middleware('permission:Usuarios.create');
        Route::put('Usuarios/{usu}','UserController@update')->name('Usuarios.update')
        ->middleware('permission:Usuarios.edit');
        Route::get('Usuarios/{usu}','UserController@show')->name('Usuarios.show')
        ->middleware('permission:Usuarios.show');
        Route::delete('Usuarios/{usu}','UserController@destroy')->name('Usuarios.destroy')
        ->middleware('permission:Usuarios.destroy');
        Route::get('Usuarios/{usu}/edit','UserController@edit')->name('Usuarios.edit')
        ->middleware('permission:Usuarios.edit');

        //Tipo de Documentos------------------------------------------
        Route::post('Documento/store','DocumController@store')->name('Documento.store')
                ->middleware('permission:Documento.create');
        Route::get('Documento','DocumController@index')->name('Documento.index')
                ->middleware('permission:Documento.index');
        Route::get('Documento/create','DocumController@create')->name('Documento.create')
                ->middleware('permission:Documento.create');
        Route::put('Documento/{doc}','DocumController@update')->name('Documento.update')
                ->middleware('permission:Documento.edit');
        Route::get('Documento/{doc}','DocumController@show')->name('Documento.show')
                ->middleware('permission:Documento.show');
        Route::delete('Documento/{doc}','DocumController@destroy')->name('Documento.destroy')
                ->middleware('permission:Documento.destroy');
        Route::get('Documento/{doc}/edit','DocumController@edit')->name('Documento.edit')
                ->middleware('permission:Documento.edit');

        //Tipo de Funcionarios------------------------------------------
        Route::post('Tfuncion/store','TfuncionariosController@store')->name('Tfuncion.store')
                ->middleware('permission:Tfuncion.create');
        Route::get('Tfuncion','TfuncionariosController@index')->name('Tfuncion.index')
                ->middleware('permission:Tfuncion.index');
        Route::get('Tfuncion/create','TfuncionariosController@create')->name('Tfuncion.create')
                ->middleware('permission:Tfuncion.create');
        Route::put('Tfuncion/{tfu}','TfuncionariosController@update')->name('Tfuncion.update')
                ->middleware('permission:Tfuncion.edit');
        Route::get('Tfuncion/{tfu}','TfuncionariosController@show')->name('Tfuncion.show')
                ->middleware('permission:Tfuncion.show');
        Route::delete('Tfuncion/{tfu}','TfuncionariosController@destroy')->name('Tfuncion.destroy')
                ->middleware('permission:Tfuncion.destroy');
        Route::get('Tfuncion/{tfu}/edit','TfuncionariosController@edit')->name('Tfuncion.edit')
                ->middleware('permission:Tfuncion.edit');

        //Tipo de Solicitantes------------------------------------------
        Route::post('Solicita/store','TsoliController@store')->name('Solicita.store')
                ->middleware('permission:Solicita.create');
        Route::get('Solicita','TsoliController@index')->name('Solicita.index')
                ->middleware('permission:Solicita.index');
        Route::get('Solicita/create','TsoliController@create')->name('Solicita.create')
                ->middleware('permission:Solicita.create');
        Route::put('Solicita/{sol}','TsoliController@update')->name('Solicita.update')
                ->middleware('permission:Solicita.edit');
        Route::get('Solicita/{sol}','TsoliController@show')->name('Solicita.show')
                ->middleware('permission:Solicita.show');
        Route::delete('Solicita/{sol}','TsoliController@destroy')->name('Solicita.destroy')
                ->middleware('permission:Solicita.destroy');
        Route::get('Solicita/{sol}/edit','TsoliController@edit')->name('Solicita.edit')
                ->middleware('permission:Solicita.edit');

        //Tipo de Identificación------------------------------------------
        Route::post('Identidad/store','IdentController@store')->name('Identidad.store')
                ->middleware('permission:Identidad.create');
        Route::get('Identidad','IdentController@index')->name('Identidad.index')
                ->middleware('permission:Identidad.index');
        Route::get('Identidad/create','IdentController@create')->name('Identidad.create')
                ->middleware('permission:Identidad.create');
        Route::put('Identidad/{ide}','IdentController@update')->name('Identidad.update')
                ->middleware('permission:Identidad.edit');
        Route::get('Identidad/{ide}','IdentController@show')->name('Identidad.show')
                ->middleware('permission:Identidad.show');
        Route::delete('Identidad/{ide}','IdentController@destroy')->name('Identidad.destroy')
                ->middleware('permission:Identidad.destroy');
        Route::get('Identidad/{ide}/edit','IdentController@edit')->name('Identidad.edit')
                ->middleware('permission:Identidad.edit');    

        //Tipo de Documentos Solicitado por Tipo de Solicitante-----------------------------
        Route::post('Documentos/store','DocumsController@store')->name('Documentos.store')
                ->middleware('permission:Documentos.create');
        Route::get('Documentos','DocumsController@index')->name('Documentos.index')
                ->middleware('permission:Documentos.index');
        Route::get('Documentos/create','DocumsController@create')->name('Documentos.create')
                ->middleware('permission:Documentos.create');
        Route::put('Documentos/{dos}','DocumsController@update')->name('Documentos.update')
                ->middleware('permission:Documentos.edit');
        Route::get('Documentos/{dos}','DocumsController@show')->name('Documentos.show')
                ->middleware('permission:Documentos.show');
        Route::delete('Documentos/{dos}','DocumsController@destroy')->name('Documentos.destroy')
                ->middleware('permission:Documentos.destroy');
        Route::get('Documentos/{dos}/edit','DocumsController@edit')->name('Documentos.edit')
                ->middleware('permission:Documentos.edit');

        //Medicamentos-----------------------------
        Route::post('Medicamentos/store','MedicController@store')->name('Medicamentos.store')
                ->middleware('permission:Medicamentos.create');
        Route::get('Medicamentos','MedicController@index')->name('Medicamentos.index')
                ->middleware('permission:Medicamentos.index');
        Route::get('Medicamentos/create','MedicController@create')->name('Medicamentos.create')
                ->middleware('permission:Medicamentos.create');
        Route::put('Medicamentos/{med}','MedicController@update')->name('Medicamentos.update')
                ->middleware('permission:Medicamentos.edit');
        Route::get('Medicamentos/{med}','MedicController@show')->name('Medicamentos.show')
                ->middleware('permission:Medicamentos.show');
        Route::delete('Medicamentos/{med}','MedicController@destroy')->name('Medicamentos.destroy')
                ->middleware('permission:Medicamentos.destroy');
        Route::get('Medicamentos/{med}/edit','MedicController@edit')->name('Medicamentos.edit')
                ->middleware('permission:Medicamentos.edit');

        //Establecimientos-----------------------------
        Route::get('Establecimiento','EstablecimientoController@inicio')->name('Establecimiento.inicio')
                ->middleware('permission:Establecimiento.inicio');
        Route::post('Establecimiento/store','EstablecimientoController@store')->name('Establecimiento.store')
                ->middleware('permission:Establecimiento.create');
        Route::get('Establecimiento','EstablecimientoController@index')->name('Establecimiento.index')
                ->middleware('permission:Establecimiento.index');
        Route::get('Establecimiento/create','EstablecimientoController@create')->name('Establecimiento.create')
                ->middleware('permission:Establecimiento.create');
        Route::put('Establecimiento/{soi}','EstablecimientoController@update')->name('Establecimiento.update')
                ->middleware('permission:Establecimiento.edit');
        Route::get('Establecimiento/{soi}','EstablecimientoController@show')->name('Establecimiento.show')
                ->middleware('permission:Establecimiento.show');
        Route::delete('Establecimiento/{soi}','EstablecimientoController@destroy')->name('Establecimiento.destroy')
                ->middleware('permission:Establecimiento.destroy');
        Route::get('Establecimiento/{soi}/edit','EstablecimientoController@edit')->name('Establecimiento.edit')
                ->middleware('permission:Establecimiento.edit');
        
        //Solicitudes-----------------------------
        Route::get('Solicitud','SolicitudController@inicio')->name('Solicitud.inicio')
                ->middleware('permission:Solicitud.inicio');
        Route::post('Solicitud/store','SolicitudController@store')->name('Solicitud.store')
                ->middleware('permission:Solicitud.create');
        Route::get('Solicitud','SolicitudController@index')->name('Solicitud.index')
                ->middleware('permission:Solicitud.index');
        Route::get('Solicitud/create','SolicitudController@create')->name('Solicitud.create')
                ->middleware('permission:Solicitud.create');
        Route::put('Solicitud/{soi}','SolicitudController@update')->name('Solicitud.update')
                ->middleware('permission:Solicitud.edit');
        Route::get('Solicitud/{soi}','SolicitudController@show')->name('Solicitud.show')
                ->middleware('permission:Solicitud.show');
        Route::delete('Solicitud/{soi}','SolicitudController@destroy')->name('Solicitud.destroy')
                ->middleware('permission:Solicitud.destroy');
        Route::get('Solicitud/{soi}/edit','SolicitudController@edit')->name('Solicitud.edit')
                ->middleware('permission:Solicitud.edit');
});

