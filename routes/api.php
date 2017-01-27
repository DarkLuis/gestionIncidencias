<?php

use Illuminate\Http\Request;

Route::get('/proyecto/{id}/niveles', 'Admin\LevelController@byProject');

//Route::get('/user', function (Request $request) {
 //   return $request->user();
//})->middleware('auth:api');
