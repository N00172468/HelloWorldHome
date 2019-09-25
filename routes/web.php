<?php
# @Author: John Carlo M. Ramos
# @Date:   2019-09-25T11:37:53+01:00
# @Email:  !!!!!---CTRL + ALT + C = Colour Picker---!!!!!
# @Last modified by:   John Carlo M. Ramos
# @Last modified time: 2019-09-25T11:58:10+01:00




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

//Default:
Route::get('/', function () {
    return view('welcome');
});

//Example:
Route::get('helloworldhome', function () {
    return '<h1>Hello World (Laptop Version)</h1>';
});

//Activity (Refer to resources/views/):
Route::get('welcomeramos', function () {
    return view('welcomeramos');
});
