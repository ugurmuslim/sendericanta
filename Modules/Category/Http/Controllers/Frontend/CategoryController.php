<?php

namespace Modules\Category\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Modules\Category\Entities\Category;
use Modules\Product\Entities\Product;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{

    public function product($slug)
    {
      $category = new Category;
      if(count($categories = $category->getAllRelatedCategories($slug))>0) {
        return view('category::frontend.subcategory')->withCategories($categories);
      }

        $category = Category::where('slug',$slug)->first();
        $products = Product::where('deleted',false)->where('category_id',$category->id)->orderBy('id','desc')->paginate(20);
        return view('category::frontend.products')->withProducts($products)
        ->withCategory($category);
    }


}
