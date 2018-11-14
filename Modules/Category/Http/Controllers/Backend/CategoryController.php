<?php

namespace Modules\Category\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Modules\Category\Entities\Category;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Cache;
class CategoryController extends Controller
{
  /**
  * Display a listing of the resource.
  * @return Response
  */
  public function index()
  {
    $categories = Category::orderBy('id','asc')->paginate(10);
    return view('category::index')->withCategories($categories);
  }

  /**
  * Show the form for creating a new resource.
  * @return Response
  */
  public function create()
  {
    $categories = Category::all();
    return view('category::create')->withCategories($categories);
  }

  /**
  * Store a newly created resource in storage.
  * @param  Request $request
  * @return Response
  */
  public function store(Request $request)

  {
    $request->validate( array(
      'name' => 'required',
      'number_low' => 'required|integer',
      'number_high' => 'required|integer',
    ));
    $categories = Category::all();
    $slug = str_slug($request->name, "-");

    foreach($categories as $category) {
      if((request('number_low') >= $category->number_low && request('number_low') <= $category->number_high) ||
      (request('number_high') >= $category->number_low && request('number_high') <= $category->number_high)) {
        $request->session()
        ->flash('error',"Numara aralığı doğru değil");
        return redirect()->route('categories.create');
      }
    }

    $category = Category::create(['name' => request('name'),'slug' => $slug,'head_category_id' => request('head_category_id'),'number_low' => request('number_low'),'number_high' => request('number_high')]);
    Cache::forget('Butix_Cache');
    Cache::forget('Bags_Cache');
    Cache::forget('Accesuar_Cache');
    /*          if(request('sizes')) {
    $size_array = array();
    $i = 0;
    foreach($request->sizes as $size) {
    $size = Size::find($size);
    if($size->statu) {
    $size_array[$i] = ['shop_id' => Auth::user()->shop_id,'user_id' => Auth::user()->id,'category_id' => $category->id,
    'size_human_id' => $size->size_human_id,'name' => $size->name,'desc' => $size->desc,'statu' => 1,'created_at' => Carbon::now()];
  }
  else {
  $size->category_id = $category->id;
  $size->statu = 1;
  $size->save();
}
$i = $i+1;

}
}
Size::insert($size_array);
*/
$request->session()
->flash('success',"Kategori $category->name Başarı ile yaratıldı");
return redirect()->route('categories.create');

}

/**
* Show the specified resource.
* @return Response
*/
public function show($id)
{
  $category = Category::find($id);
  return view('category::show')->withCategory($category);
}

/**
* Show the form for editing the specified resource.
* @return Response
*/
public function edit($id)
{
  $cats = Category::all();

  $category = Category::find($id);
  return view('category::edit')->withCategory($category)
  ->withCategories($cats);
}

/**
* Update the specified resource in storage.
* @param  Request $request
* @return Response
*/
public function update(Request $request,$id)
{
  $request->validate(array(
  'name' => 'required',
  'number_low' => 'required|integer',
  'number_high' => 'required|integer',
  ));
  $category_ins = Category::find($id);
  $slug = str_slug($request->name, "-");
  $categories = Category::all();
  foreach($categories as $category) {
    if($category->id !== $category_ins->id) {
    if((request('number_low') >= $category->number_low && request('number_low') <= $category->number_high) ||
    (request('number_high') >= $category->number_low && request('number_high') <= $category->number_high)) {
      $request->session()
      ->flash('error',"Numara aralığı doğru değil");
      return redirect()->back();
    }
    }
  }
  $category_ins->update(['name' => request('name'),'slug' => $slug,'head_category_id'=>request('head_category_id'),'number_low' => request('number_low'),'number_high' => request('number_high')]);

  $request->session()
  ->flash('success',"Kategori $category_ins->name Başarı ile Değiştirildi");
  return redirect()->back();

}
/**
* Remove the specified resource from storage.
* @return Response
*/
public function destroy($slug)
{
  $category = Category::where('slug',$slug)->first();
  $category->delete();
  $request->session()
  ->flash('success',"Kategori $category->name Başarı ile Silindi");
  return redirect()->back();

}
}
