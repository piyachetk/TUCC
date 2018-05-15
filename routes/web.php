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

Route::get('/', ['as' => 'index', function () {
    return view('index');
}]);

Route::get('/announce/old', function () {
    return view('announceOld');
});

Route::get('/confirm/old', function () {
    return view('confirmOld');
});

Route::post('/confirm/old', 'MemberController@confirmOld');

/*
 * For final announcement at Sat 19th May 2018
 *

Route::get('/announce/new', function () {
    return view('announceNew');
});

Route::get('/confirm/new', function () {
    return view('confirmNew');
});

Route::post('/confirm/new', 'MemberController@confirmNew');

*/