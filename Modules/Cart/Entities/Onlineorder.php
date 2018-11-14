<?php

namespace Modules\Cart\Entities;

use Illuminate\Database\Eloquent\Model;
use Session;
use Auth;
class Onlineorder extends Model
{
  protected $fillable = [];
  protected $table = 'online_orders';

  public function productsale() {
    return  $this->hasOne('Modules\Sale\Entities\Productsale','sale_package','sale_package_id');
  }



  public function nextBasketId() {
    return $this->orderBy('basketId','desc')->first()->basketId + 1;
  }

/*  public function createOrder($checkoutForm,$adress_id,$product_sale) {

    $sarebu_orders = Onlineorder::insert([
      'basketId' => $checkoutForm->getBasketId(),
      'product_sale_id' => $product_sale->id,
      'sale_package_id' => $product_sale->sale_package,
      'customer_id' => Auth::user()->id,
      'adress_id' => $adress_id,
      'status' => $checkoutForm->getStatus(),
      'paid' => $checkoutForm->getPaidPrice(),
      'log' => $checkoutForm->getrawResult(),
    ]);

  }
*/
  public function createOrder($merchant_oid ,$adress_id,$product_sale) {

    $sarebu_orders = Onlineorder::insert([
      'basketId' => $merchant_oid,
      'product_sale_id' => $product_sale->id,
      'sale_package_id' => $product_sale->sale_package,
      'customer_id' => Auth::user()->id,
      'adress_id' => $adress_id,
      'status' => 0,
      'paid' => 0,
      'log' => 9999,
    ]);

  }


  public function createDoorOrder($adress_id,$product_sale) {

    $sarebu_orders = Onlineorder::insert([
      'basketId' => 99999,
      'product_sale_id' => $product_sale->id,
      'sale_package_id' => $product_sale->sale_package,
      'customer_id' => Auth::user()->id,
      'adress_id' => $adress_id,
      'status' => 9999,
      'paid' => 0,
      'log' => 9999,
    ]);

  }



}
