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
//    return view('welcome');
//});
/*
comandos de ruta
get        |
post       |
put        |
patch      |
delete     |
options    |
any        |
match      |

forma para ver todas las rutas creadas

C:/wamp64/www/centro/centro>php artisan routes:list

Agrupado de rutas se pueden hacer a traves de:
siddleware
prefix
Domain
namespace

Esto se hace para especificar bajo que condiciones usted puede entrar a una ruta o a cual otra o si simplemente no puede entrar a ninguna
*/


/*
Route::get('/',function(){
	return "welcome";
});
*/
//vali


//Route::get('auth/login',function(){
//return view('auth.login');
//});



//base


Route::get('/',function(){
return view('index');
});

Route::get('quees',function(){
return view('quees');
});

Route::get('mision',function(){
return view('mision');
});

Route::get('vision',function(){
return view('vision');
});

Route::get('area',function(){
return view('area');
});

Route::get('equipo',function(){
return view('equipo');
});

Route::get('solicitudes',function(){
return view('solicitudes');
});

Route::get('registro',function(){
return view('registro');
});

//usuario
Route::get('usuario/index',function(){
return view('Usuario.index');
});

Route::get('usuario/perfil',function(){
return view('Usuario.perfil');
});

Route::get('usuario/generarsoli',function(){
return view('Usuario.generarsoli');
});

Route::get('usuario/consultarsoli',function(){
return view('Usuario.consultarsoli');
});

//monitor
Route::get('monitor/index',function(){
return view('Monitor.index');
});

Route::get('monitor/perfil',function(){
return view('Monitor.perfil');
});

Route::get('monitor/horario',function(){
return view('Monitor.horario');
});

Route::get('monitor/solicitudes',function(){
return view('Monitor.solicitudes');
});

Route::get('monitor/informes',function(){
return view('Monitor.informes');
});

Route::get('monitor/recordatorios',function(){
return view('Monitor.recordatorios');
});

//lider
Route::get('lider/index',function(){
return view('Lider.index');
});

Route::get('lider/perfil',function(){
return view('Lider.perfil');
});

Route::get('lider/generarinforme',function(){
return view('Lider.generarinforme');
});

Route::get('lider/verinforme',function(){
return view('Lider.verinforme');
});

Route::get('lider/mostrarsoli',function(){
return view('Lider.mostrarsoli');
});

Route::get('lider/consultarsoli',function(){
return view('Lider.consultarsoli');
});

Route::get('lider/asignartarea',function(){
return view('Lider.asignartarea');
});

Route::get('lider/asignarsoli',function(){
return view('Lider.asignarsoli');
});

Route::get('lider/mostrarhmonitor',function(){
return view('Lider.mostrarhmonitor');
});

Route::get('lider/editarhmontor',function(){
return view('Lider.editarhmonitor');
});

//administrador
Route::get('admin/index',function(){
return view('admin.index');
});

Route::get('admin/perfil',function(){
return view('admin.perfil');
});

Route::get('admin/registrarlimon',function(){
return view('admin.registrarlimon');
});

Route::get('admin/registrarsalon',function(){
return view('admin.registrarsalon');
});

Route::get('admin/consultarlider',function(){
return view('admin.consultarlider');
});

Route::get('admin/consultarmonitor',function(){
return view('admin.consultarmonitor');
});

Route::get('admin/consultarsalon',function(){
return view('admin.consultarmonitor');
});

Route::get('admin/generartiposoli',function(){
return view('admin.generartiposoli');
});

Route::get('admin/consultartiposoli',function(){
return view('admin.consultartiposoli');
});

Route::get('admin/generarhmonitor',function(){
return view('admin.generarhmonitor');
});

Route::get('admin/consultarhmonitor',function(){
return view('admin.consultarhmonitor');
});

Route::get('admin/generarhsalon',function(){
return view('admin.generarhsalon');
});

Route::get('admin/consultarhsalon',function(){
return view('admin.consultarhsalon');
});

Route::get('admin/verinformes',function(){
return view('admin.verinformes');
});

Route::get('admin/estadistica',function(){
return view('admin.estadistica');
});

Route::resource('users','UserController');


Route::resource('roles', 'RolController');
Route::resource('cuentas', 'CuentaController');
Route::resource('estudiantes', 'EstudianteController');
Route::get('cuentas', 'CuentaController@create');
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
