<?php

Route::group(['middleware' => ['web','admin'], 'prefix' => 'brand', 'namespace' => 'Modules\Brand\Http\Controllers\Backend'], function()
{
  Route::get('/', 'BrandController@index');
  Route::get('/create', 'BrandController@create')->name('brands.create');
  Route::get('/{slug}', 'BrandController@show')->name('brands.show');
  Route::get('/{id}', 'BrandController@update')->name('brands.show');
  Route::delete('/{id}', 'BrandController@destroy')->name('brands.destroy');
});
