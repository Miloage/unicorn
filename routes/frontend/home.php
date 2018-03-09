<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'HomeController@index')->name('index');
Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact/send', 'ContactController@send')->name('contact.send');

Route::get('classify', 'HomeController@classify')->name('classify');
Route::get('list', 'HomeController@list')->name('list');
Route::get('cart', 'HomeController@cart')->name('cart');
Route::get('payment', 'HomeController@payment')->name('payment');
Route::get('payment/result', 'HomeController@paymentResult')->name('payment.result');
Route::get('address', 'HomeController@address')->name('address');
Route::get('address/{id}/edit', 'HomeController@addressEdit')->name('address.edit');
Route::get('address/add', 'HomeController@addressAdd')->name('address.add');
Route::get('profile', 'HomeController@profile')->name('profile');
Route::get('order', 'HomeController@order')->name('order');
Route::get('comment', 'HomeController@comment')->name('comment');
Route::get('product', 'HomeController@product')->name('product');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');
    });
});
