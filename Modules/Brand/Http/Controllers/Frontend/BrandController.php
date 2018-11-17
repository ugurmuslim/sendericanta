<?php

namespace Modules\Brand\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Category\Entities\Category;
use Modules\Brand\Entities\Brand;
use Modules\Product\Entities\Product;

class BrandController extends Controller
{
  public function product($brand_slug,$category_slug)
  {
    $brand = Brand::where('slug',$brand_slug)->first();
    if($category_slug != "none") {
      $category = Category::where('slug',$category_slug)->first();
      $products = Product::where('deleted',false)->where('category_id',$category->id)->where('brand_id',$brand->id)->orderBy('id','desc')->paginate(20);
    }
    else {
      $products = Product::where('deleted',false)->where('brand_id',$brand->id)->orderBy('id','desc')->paginate(20);
    }
      return view('brand::frontend.products')->withProducts($products)
      ->withBrand($brand);
    }
  }
