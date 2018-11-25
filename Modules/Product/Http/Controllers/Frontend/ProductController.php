<?php

namespace Modules\Product\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;
use Modules\Category\Entities\Category;
use Modules\Unit\Entities\Unit;
use Modules\Attribute\Entities\Attribute;
use Modules\Attribute\Entities\Attributename;
use Redis;
use Illuminate\Support\Facades\Redis as Lredis;
use Image;
class ProductController extends Controller
{


  /**
  * Display a listing of the resource.
  * @return Response
  */

  public function index()
  {
    $products = Product::where('deleted',false)->orderBy('id','desc')->paginate(16);
    $categories = Category::all();
    return view('product::frontend.products')->withProducts($products)
    ->withCategories($categories);
  }


  public function show($slug)
  {
    $storage = Lredis::connection();
    $views = $storage->incr('Ürün:' .$slug . ':views');
    $storage->pipeline(function ($pipe) use ($slug){
      $pipe->zIncrBy('products',1,$slug);
    $views = $pipe->incr('product:'.$slug .':views');
    });

    $product = Product::where('slug',$slug)->first();
    $product_category = $product->category;
    $related_products = $product_category->products()->where('deleted',false)->take(4)->inRandomOrder()->get();
    return view('product::frontend.detail')->withProduct($product)
    ->withRelatedproducts($related_products);
  }

  public function attributes($product_slug,$attr_type, $attr_id)
  {
    $product = Product::where('slug',$product_slug)->first();
    if($attr_type == 2) {
      $attr = $product->colors()->where('size_id',$attr_id)->where('stock','>',0)->get();
    }
    else {
      $attr = $product->sizes()->where('color_id',$attr_id)->where('stock','>',0)->get();
    }
    return $attr;
  }

  public function products(){
    $products = Product::select('name')->get();
    return $products;
  }


}
