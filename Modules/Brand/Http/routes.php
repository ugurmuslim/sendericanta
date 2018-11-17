<?php

Route::group(['middleware' => ['web','admin'], 'prefix' => 'brands', 'namespace' => 'Modules\Brand\Http\Controllers\Backend'], function()
{
  Route::get('/', 'BrandController@index')->name('brands.index');
  Route::get('/create', 'BrandController@create')->name('brands.create');
  Route::get('/{slug}', 'BrandController@show')->name('brands.show');
  Route::get('/edit/{slug}', 'BrandController@edit')->name('brands.edit');
  Route::get('/{id}', 'BrandController@update')->name('brands.update');
  Route::post('/', 'BrandController@store')->name('brands.store');
  Route::delete('/{id}', 'BrandController@destroy')->name('brands.destroy');
});

Route::group(['middleware' => ['web'], 'prefix' => 'categories', 'namespace' => 'Modules\Brand\Http\Controllers\Frontend'], function()
{
  Route::get('/products/{brand_slug}/{categroy_slug}', 'BrandController@product')->name('brands.products');
});
