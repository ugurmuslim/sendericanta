<?php

Route::group(['middleware' => 'web', 'prefix' => 'cart', 'namespace' => 'Modules\Cart\Http\Controllers'], function()
{
  Route::post('/update','CartController@update')->name('cart.update');
  Route::get('/', 'CartController@index');
  Route::post('/', 'CartController@store')->name('cart.store');
  Route::get('empty','CartController@empty')->name('cart.destroy');
  Route::get('/remove/{row_id}','CartController@remove')->name('cart.remove');
  Route::get('/checkout','CheckoutController@index')->name('checkout.index');
  Route::post('payment/create','CheckoutController@create')->name('payment.create');
  Route::post('payment/callback','CheckoutController@CheckoutRequest')->name('payment.callback');
  Route::get('success','CheckoutController@success')->name('payment.success');
  Route::get('fail','CheckoutController@fail')->name('payment.fail');
  Route::get('payment_door','CheckoutController@paymentDoor')->name('payment.paymentdoor');
});

Route::group(['middleware' => 'web', 'prefix' => 'api', 'namespace' => 'Modules\Cart\Http\Controllers'], function()
{
  Route::get('/cart','CartController@getCartContent')->name('cart.content');
});
