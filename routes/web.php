<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    Route::delete('active-client/destroy', 'ActiveClientController@massDestroy')->name('active-client.massDestroy');
    Route::resource('active-client', 'ActiveClientController');

    Route::delete('active-opportunity/destroy', 'ActiveOpportunityController@massDestroy')->name('active-opportunity.massDestroy');
    Route::resource('active-opportunity', 'ActiveOpportunityController');

    Route::delete('active-opportunity-reminder/destroy', 'ActiveOpportunityReminderController@massDestroy')->name('active-opportunity-reminder.massDestroy');
    Route::resource('active-opportunity-reminder', 'ActiveOpportunityReminderController');

    Route::get('get-active-client','GetActiveClientController@index')->name('get-active-client.index');

    Route::get('getCityByProvinceId/{id}', 'CityController@getCityByProvinceId');
});
