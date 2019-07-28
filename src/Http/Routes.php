<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/28
 * Time: 13:27
 */

Route::get('/', 'ZchjunitController@index');
Route::post('/', 'ZchjunitController@store')->name('Zchjunit.store');

Route::get('test', 'TestController@index');

//dd(app('view'));
