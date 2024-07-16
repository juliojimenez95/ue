<?php

use Illuminate\Support\Facades\Route;

//RUTAS EXTERNAS DE LA SESION DEL USUARIO
Route::group(['middleware' => 'log'], function () {
	Route::get('/', function () {
		return view('auth.login');
	});
});

Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('/login');

//MIDDLEWARE DE SESION INICIADA
Route::group(['middleware' => 'session'], function () {
	//RUTA HOME
	Route::post('/get_empresas', [App\Http\Controllers\EmpresaController::class, 'index'])->name('get_empresas');
	Route::post('/add_empresas', [App\Http\Controllers\EmpresaController::class, 'store'])->name('add_empresas');


	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
	//RUTAS ADMINISTRADOR
	/*Route::group(['middleware' => 'admin'], function () {
		//rutas Empresa 
		//RUTAS USUARIOS
		Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
		Route::post('/get_users', [App\Http\Controllers\UserController::class, 'get'])->name('get_users');
		Route::post('/store_users', [App\Http\Controllers\UserController::class, 'store'])->name('store_users');
		Route::post('/update_users', [App\Http\Controllers\UserController::class, 'update'])->name('update_users');
	});*/
	//RUTAS PERFIL
	Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
	Route::post('/update_profile', [App\Http\Controllers\UserController::class, 'update_profile'])->name('update_profile');
	Route::post('/update_pass', [App\Http\Controllers\UserController::class, 'update_pass'])->name('update_pass');
	Route::post('/update_pass_prim', [App\Http\Controllers\UserController::class, 'update_pass_prim'])->name('update_pass_prim');
	Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

	//RUTAS CLIENTE
	Route::get('/client', [App\Http\Controllers\ClientController::class, 'index'])->name('client');
	Route::post('/get_clientes', [App\Http\Controllers\ClientController::class, 'get'])->name('get_clientes');
	Route::post('/add_clientes', [App\Http\Controllers\ClientController::class, 'add'])->name('add_clientes');
	Route::post('/edit_clientes', [App\Http\Controllers\ClientController::class, 'edit'])->name('edit_clientes');
	//RUTAS PARA descuento
	Route::post('/descuento', [App\Http\Controllers\ClientController::class, 'descuento'])->name('descuento');

	//RUTAS DOMICILIOS
	Route::post('/get_domicile', [App\Http\Controllers\ClientDomicileController::class, 'get'])->name('get_domicile');
	Route::post('/get_domicile_p', [App\Http\Controllers\ClientDomicileController::class, 'get_p'])->name('get_domicile_p');
	Route::post('/add_domicile', [App\Http\Controllers\ClientDomicileController::class, 'add'])->name('add_domicile');
	Route::post('/edit_domicile', [App\Http\Controllers\ClientDomicileController::class, 'edit'])->name('edit_domicile');
	Route::post('/delete_domicile', [App\Http\Controllers\ClientDomicileController::class, 'delete'])->name('delete_domicile');
	Route::post('/get_departamento', [App\Http\Controllers\ClientDomicileController::class, 'dep'])->name('get_departamento');
	Route::post('/get_municipio', [App\Http\Controllers\ClientDomicileController::class, 'mun'])->name('get_municipio');

	//RUTAS ASIGNACION DE LABORATORIOS
	Route::get('/user_laboratory', [App\Http\Controllers\UserLaboratoryController::class, 'index'])->name('user_laboratory');
	Route::post('/get_user_laboratory', [App\Http\Controllers\UserLaboratoryController::class, 'get'])->name('get_user_laboratory');
	Route::post('/edit_user_laboratory', [App\Http\Controllers\UserLaboratoryController::class, 'edit'])->name('edit_user_laboratory');
	Route::post('/store_user_laboratory', [App\Http\Controllers\UserLaboratoryController::class, 'store'])->name('store_user_laboratory');
	Route::post('/update_user_laboratory', [App\Http\Controllers\UserLaboratoryController::class, 'store'])->name('update_user_laboratory');


	//RUTAS PEDIDOS
	Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('order');
	Route::post('/get_orders', [App\Http\Controllers\OrderController::class, 'get'])->name('get_orders');
	Route::post('/get_lotes_ref', [App\Http\Controllers\OrderController::class, 'get_lotes'])->name('get_lotes_ref');
	Route::post('/get_orders_range', [App\Http\Controllers\OrderController::class, 'get_range'])->name('get_orders_range');
	Route::post('/get_referencias', [App\Http\Controllers\OrderController::class, 'get_referencias'])->name('get_referencias');
	Route::post('/add_orders', [App\Http\Controllers\OrderController::class, 'add'])->name('add_orders');
	Route::post('/anular_orden', [App\Http\Controllers\OrderController::class, 'anular'])->name('anular_orden');
	Route::get('/pdf/{id}', [App\Http\Controllers\OrderController::class, 'pdf']);
	Route::post('/anexo', [App\Http\Controllers\OrderController::class, 'anexo']);

	//rutas de roles 
	Route::get('/rol', [App\Http\Controllers\RolController::class, 'index'])->name('rol');
	Route::post('/get_roles', [App\Http\Controllers\RolController::class, 'get'])->name('get_roles');
	Route::post('/add_roles', [App\Http\Controllers\RolController::class, 'store'])->name('add_roles');
	//usuarios 
	Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
	Route::post('/get_users', [App\Http\Controllers\UserController::class, 'get'])->name('get_users');
	Route::post('/store_users', [App\Http\Controllers\UserController::class, 'store'])->name('store_users');
	Route::post('/update_users', [App\Http\Controllers\UserController::class, 'update'])->name('update_users');
	//cuestionario 
	Route::get('/cuestionario', [App\Http\Controllers\CuestionarioController::class, 'index'])->name('cuestionario');
	Route::get('/cuestionario/{id}', [App\Http\Controllers\CuestionarioController::class, 'show'])->name('cuestionario_id');
	Route::post('/get_cuestionario', [App\Http\Controllers\CuestionarioController::class, 'get'])->name('get_cuestionario');
	Route::post('/store_cuestionario', [App\Http\Controllers\CuestionarioController::class, 'store'])->name('store_cuestionario');
	Route::post('/update_cuestionario', [App\Http\Controllers\CuestionarioController::class, 'update'])->name('update_cuestionario');
	//niveles de riesgo 
	Route::get('/nivel_r', [App\Http\Controllers\NivelRiesgoController::class, 'index'])->name('nivel_r');

});
