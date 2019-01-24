<?php
use App\User;
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
    if (!empty(Auth::user()->name))
        return redirect()->route('home');
    else
        return view('welcome');
});

Route::post('/login','MyAvt@login')->name('login'); //маршрут для логина
Route::get('/login',function () {return view('welcome');})->name('login'); //маршрут для логина
Route::post('/logout','MyAvt@logout')->name('logout'); //маршрут для выхода

Route::get('/allUsers','MyAvt@index')->name('allUsers');


Route::get('/newUser','MyAvt@create')->name('newUser'); // форма создания пользователя

Route::post('/newUser','MyAvt@store')->name('saveUser');// сохранение
Route::delete('/delUser{user}','MyAvt@destroy')->name('delUser'); // удаление

Route::get('/edUser{user}','MyAvt@edit')->name('edUser'); // форма редактирования

Route::put('/upUser{user}','MyAvt@update')->name('upUser'); //

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); // страница входа

Route::get('/first','siteControl@home')->name('firstpage'); // первая страница сайта

Route::post('/prise','SaleController@prise');// аякс запрос цены
Route::get('/sale_find_client','SaleController@find_client')->name('find_client');
Route::post('/sale_find_c','SaleController@find_c')->name('find_c');

Route::get('/sale_po','SaleController@find_po')->name('find_po');

Route::get('/stat','SaleController@stat')->name('stat');

Route::post('/sale_po_c','SaleController@find_po_c')->name('find_po_c');

Route::post('/soft_client','SaleController@po_client');// аякс запрос клиентов
 // печать
 Route::get('/print_one','Wordcontrol@one_doc')->name('print_one'); // тестовая печать

Route::get('/print/{sale}','SaleController@print')->name('sale.print');

Route::get('/print_many','Wordcontrol@many_doc')->name('print_many'); // тестовая печать

Route::resource('client', 'ClientController', ['except' => ['edit']]);
Route::resource('sale', 'SaleController', ['except' => ['edit']]);
Route::resource('shop', 'ShopController', ['except' => ['edit']]);
Route::resource('soft', 'SoftController', ['except' => ['edit']]);
Route::resource('discount', 'DiscountController', ['except' => ['edit']]);
