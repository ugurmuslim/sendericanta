<?php

namespace Modules\Brand\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Category\Entities\Category;
use Modules\Brand\Entities\Brand;

class BrandController extends Controller
{
  /**
  * Display a listing of the resource.
  * @return Response
  */
  public function index()
  {
    $brands = Brand::all();
    return view('brand::backend.index')->withBrands($brands);
  }

  /**
  * Show the form for creating a new resource.
  * @return Response
  */
  public function create()
  {
    $categories = Category::getSubCategories();
    return view('brand::backend.create')->withCategories($categories);
  }

  /**
  * Store a newly created resource in storage.
  * @param  Request $request
  * @return Response
  */
  public function store(Request $request)
  {

    $request->validate(array(
      'name' => 'required|max:50',
      'category_ids' => 'required',
    ));

    $brand = new Brand;
    $brand->slug = str_slug($request->slug, "-");
    $brand->name = $request->name;
    $brand->save();
    $brand->categories()->sync($request->category_ids);
    $request->session()
    ->flash('success',"Ürün $brand->name Yaratıldı");
    return redirect()->route('brands.create');

  }


  /**
  * Show the specified resource.
  * @return Response
  */
  public function show($slug)
  {
    $brand = Brand::where('slug',$slug)->first();
    return view('brand::backend.show')->withBrand($brand);
  }

  /**
  * Show the form for editing the specified resource.
  * @return Response
  */
  public function edit($slug)
  {
    $brand = Brand::where('slug',$slug)->first();
    $category2=array();
    foreach($brand->categories as $category){

      $category2[$category->id]=$category->name;

    }

    return view('brand::backend.edit')->withBrand($brand)
    ->withCategories($category2);
  }

  /**
  * Update the specified resource in storage.
  * @param  Request $request
  * @return Response
  */
  public function update(Request $request)
  {
  }

  /**
  * Remove the specified resource from storage.
  * @return Response
  */
  public function destroy()
  {
  }
}
