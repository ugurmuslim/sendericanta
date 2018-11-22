<?php

namespace Modules\Shop\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Category\Entities\Category;
use Modules\Brand\Entities\Brand;
use App\Models\Auth\User\User;
use Modules\Shop\Emails\SendContactMail;
use Modules\Product\Entities\Product;
use Modules\Cart\Emails\SendSaleSuccess;
use Mail;
use Auth;
use Redis;
use DB;
use Cache;
use Illuminate\Support\Facades\Redis as Lredis;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
     $storage = LRedis::Connection();
      $popular = $storage->zRevRange('products',0,3);
      $popular_products = array();
      foreach($popular as $value){
        $popular_products[] = Product::where('slug',$value)->first();
      }
      $men_bags = "Men_Cache";
      $woman_bags = "Women_Cache";
      $unisex_bags = "Unisex_Cache";

      $category = new Category;
      $products = Product::orderBy('id','DESC')->take(40)->get();

    //  $men_products = Product::where('deleted',false)->whereIn('category_id',$category->getCategoryIds('erkek',$men_bags))->orderBy('id','DESC')->take(8)->get();
    //  $women_products = Product::where('deleted',false)->whereIn('category_id',$category->getCategoryIds('kadin',$woman_bags))->orderBy('id','DESC')->take(8)->get();
    //  $unisex_products = Product::where('deleted',false)->whereIn('category_id',$category->getCategoryIds('unisex',$unisex_bags))->orderBy('id','DESC')->take(8)->get();
      $categories = Category::all();
      $brands = Brand::all();
        return view('shop::index')
        ->withProducts($products)
        //->with('men_products',$men_products)
        //->with('women_products',$women_products)
        //->with('unisex_products',$unisex_products)
        ->with('popular_products',$popular_products)
        ->withCategories($categories)
        ->withBrands($brands);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */

     public function checkout()
     {
         return view('shop::checkout');
     }
    public function create()
    {
        return view('shop::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('shop::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('shop::edit');
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

    public function contact()
    {
      return view('shop::contact');
    }
    public function contactMail(Request $request)
    {
      Mail::to(User::where('email','sendericanta@hotmail.com')->first())->send(new SendContactMail($request->email,$request->msg));
      $request->session()
      ->flash('success',"Mailinizi Aldık. En kısa sürede Geri Dönüş Yapacağız.");
      return redirect()->back();

    }
    public function privacy()
    {
      return view('shop::policies.privacy_policy');
    }
    public function cancelReturn()
    {
      return view('shop::policies.cancel_return');
    }

    public function terms()
    {
      return view('shop::policies.terms_of_use');
    }

    public function onlineSellingContract()
    {
      return view('shop::policies.online_selling_contract');
    }

    public function paymentShipment()
    {
      return view('shop::policies.payment_shipment_policy');
    }

    public function lawsuit()
    {
      return view('shop::policies.lawsuit');
    }

}
