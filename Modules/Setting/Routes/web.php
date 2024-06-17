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

Route::prefix('setting')->middleware('auth')->group(function () {
    Route::get('/', 'SettingController@index');
    Route::get('/logout', 'SettingController@logout');
    Route::resource('roles', 'RolesController');
    Route::resource('pengaturan', 'PengaturanController');
    Route::resource('user', 'UserController');
    Route::resource('backup', 'BackupController');
    Route::resource('restore', 'RestoreController');
    Route::resource('menu', 'MenuController')->except(['show']);
    Route::get('/renderTree', 'MenuController@renderTree')->name('menu.renderTree');
    Route::get('/dataTable', 'MenuController@dataTable')->name('menu.dataTable');
    Route::get('/sortAndNested', 'MenuController@sortAndNested')->name('menu.sortAndNested');
});