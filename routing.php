<?php
//課題 3 
Route::get('XXX', 'Admin\AAAController@bbb');

//or
Route::get('XXX', 'AAAController@bbb');

//Controllerは、Admin内に作成する必要があるんですか？
//特になく、任意でしょうか？

//課題 4
Route::group(['prefix' => 'admin'], function() {
  Route::get('profile/create', 'Admin\ProfileController@add');
  Route::get('profile/edit', 'Admin\ProfileController@edit');
});

?>
