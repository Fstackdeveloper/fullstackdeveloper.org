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

Route::get('/', 'FrontendHomeController@index')->name('frontend.home');;
Route::post('message/send', 'FrontendMessagesController@send')->name('send.message');
Route::get('portfolio', 'FrontendPortfolioController@index')->name('frontend.portfolio');

//Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');





Route::get('admin', 'AdminHomeController@index')->name('adminHome');
Route::get('admin/setting', 'AdminSettingController@index')->name('adminSetting');
Route::post('admin/setting/update', 'AdminSettingController@update')->name('adminSettingUpdate');
/*

Route::resource('admin/project', 'AdminProjectController', [
    'names' => [
        'index' => 'project',
        'create' => 'project.create',
	    'store' => 'project.store',
        'show' => 'project.show',
        'edit' => 'project.edit',
        'update' => 'project.update',
        'destroy' => 'project.destroy'
    ]
]);

*/
Route::get('admin/project', 'AdminProjectController@index')->name('project');
Route::get('admin/project/data', 'AdminProjectController@projectsData')->name('project.data');
Route::get('admin/project/create', 'AdminProjectController@create')->name('project.create');
Route::post('admin/project/store', 'AdminProjectController@store')->name('project.store');
Route::get('admin/project/edit/{id}', 'AdminProjectController@edit')->name('project.edit');
Route::post('admin/project/update/{id}', 'AdminProjectController@update')->name('project.update');
Route::post('admin/project/destroy/{id}', 'AdminProjectController@destroy')->name('project.destroy');




Route::get('admin/project/category', 'AdminProjectCategoryController@index')->name('project.category');
Route::get('admin/project/category/data', 'AdminProjectCategoryController@CategoriesData')->name('project.category.data');
Route::get('admin/project/category/create', 'AdminProjectCategoryController@create')->name('project.category.create');
Route::post('admin/project/category/store', 'AdminProjectCategoryController@store')->name('project.category.store');
Route::get('admin/project/category/edit/{id}', 'AdminProjectCategoryController@edit')->name('project.category.edit');
Route::post('admin/project/category/update/{id}', 'AdminProjectCategoryController@update')->name('project.category.update');
Route::post('admin/project/category/destroy/{id}', 'AdminProjectCategoryController@destroy')->name('project.category.destroy');



Route::get('admin/project/client', 'AdminProjectClientController@index')->name('project.client');
Route::get('admin/project/client/data', 'AdminProjectClientController@ClientsData')->name('project.client.data');
Route::get('admin/project/client/create', 'AdminProjectClientController@create')->name('project.client.create');
Route::post('admin/project/client/store', 'AdminProjectClientController@store')->name('project.client.store');
Route::get('admin/project/client/edit/{id}', 'AdminProjectClientController@edit')->name('project.client.edit');
Route::post('admin/project/client/update/{id}', 'AdminProjectClientController@update')->name('project.client.update');
Route::post('admin/project/client/destroy/{id}', 'AdminProjectClientController@destroy')->name('project.client.destroy');



Route::get('admin/user', 'AdminUserController@index')->name('user');
Route::get('admin/user/data', 'AdminUserController@ClientsData')->name('user.data');
Route::get('admin/user/create', 'AdminUserController@create')->name('user.create');
Route::post('admin/user/store', 'AdminUserController@store')->name('user.store');
Route::get('admin/user/edit/{id}', 'AdminUserController@edit')->name('user.edit');
Route::post('admin/user/update/{id}', 'AdminUserController@update')->name('user.update');
Route::post('admin/user/destroy/{id}', 'AdminUserController@destroy')->name('user.destroy');





Route::get('admin/message', 'AdminMessageController@index')->name('message');
Route::get('admin/message/data', 'AdminMessageController@MessagesData')->name('message.data');
Route::get('admin/message/create', 'AdminMessageController@create')->name('message.create');
Route::post('admin/message/store', 'AdminMessageController@store')->name('message.store');
Route::get('admin/message/{id}', 'AdminMessageController@show')->name('message.show');
Route::get('admin/message/edit/{id}', 'AdminMessageController@edit')->name('message.edit');
Route::post('admin/message/update/{id}', 'AdminMessageController@update')->name('message.update');
Route::post('admin/message/destroy/{id}', 'AdminMessageController@destroy')->name('message.destroy');
