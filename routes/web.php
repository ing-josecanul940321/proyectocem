<?php

// PAGINA WEB

Route::get('/', 'Homecontroller@index')->name('index');


Route::get('/medicos', function(){
	return view('medicos');
});
Route::get('/medicos/mostrar', function(){
	return view('medicos.show');
});


Route::get('/enfermeria', function(){
	return view('enfermeria');
}); 
Route::get('/enfermeria/mostrar', function(){
	return view('enfermeras.show');
});

Route::get('/noticias', 'Noticiascontroller@index')->name('index');
Route::get('/noticias/mostrar', function(){
	return view('noticias.show');
});


// LOGIN 
// 
Route::get('/login', function() {
	return view('auth.login');
});

// PANEL ADMIN

Route::get('admin', function(){
	return view('admin.dashboard');
});

Route::group(['prefix' => 'admin'], function(){
	Route::get('/seccion-noticias', function(){ 
		return view('admin.noticias.admin-noticias');
	});
	Route::get('/seccion-noticias/create', 'Noticiascontroller@create');
	Route::post('/seccion-noticias', 'Noticiascontroller@store');

	Route::get('seccion-doctor', 'Medicoscontroller@index');
});