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

//Route::get('/bienvenida', function (){
//    return view('bienvenida');
//});
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

Route::get('/creatingUser/{name}', function($name, Faker $faker) {
    \App\User::create([
        'name' => $name,
        'email' => $faker->safeEmail,
        'password' => Hash::make('12345678'),
    ]);

    return 'creado';
});

Route::get('/logueando/{name}', function($name){
    $user = \App\User::where('name', $name)->get();

    return $user->login();

});


Route::post('/bienvenida', 'PruebasController@index');
Route::get('/bienvenida', 'PruebasController@create');
Route::post('/carga', 'PruebasController@charge');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/subir', 'uploadFileView');
Route::post('/subir', 'FilesController@upload');
