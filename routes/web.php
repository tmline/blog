<?php
use Illuminate\Support\Facades\Route;

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
/*
Route::get('/messages', function () {
	return 'This is ADD';
});*/
// tml

Route::get('/add', 'Messages@add');

Route::get('/del', 'Messages@del');

Route::get('/edit', 'Messages@edit');

Route::get('/all', 'Messages@all');

Route::get('/one', 'Messages@one');

Route::get('/login', 'Messages@login');

Route::get('/logout', 'Messages@logout');


Route::post('/add', 'Messages@add');

Route::post('/del', 'Messages@del');

Route::post('/edit', 'Messages@edit');

Route::post('/all', 'Messages@all');

Route::post('/one', 'Messages@one');

Route::post('/login', 'Messages@login');

