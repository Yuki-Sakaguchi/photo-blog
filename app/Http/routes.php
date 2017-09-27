<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/helo', function() {
//     // view( テンプレート名, 連想配列);
//     // テンプレートは「respources/view」にある
//     return view('helo', [
//         'message' => 'Hello!'
//     ]);
// });
//
// ↓ Routeに全て書くのは大変なので、コントローラーを使う

Route::controller('helo', 'HeloController');
