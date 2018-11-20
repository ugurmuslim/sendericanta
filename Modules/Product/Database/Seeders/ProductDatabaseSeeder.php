<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Product\Entities\Product;

class ProductDatabaseSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    Product::create([
        'name' => 'İndirim',
        'product_id' => 3,
        'slug' => 'İndirim',
        'price' => 0,
        'details' =>'İndirim',
        'category_id' => 103,
        'brand_id' => null,
        'unit_id' => 1,
        'size_track' => null,
        'campaign_id' => null,
        'deleted' => 0,
        'featured' => 0,
      ]);

      Product::create([
        'name' => 'Kampanya',
        'product_id' => 1,
        'slug' => 'Kampanya',
        'price' => 0,
        'details' =>'Kampanya',
        'category_id' => 101,
        'brand_id' => null,
        'unit_id' => 1,
        'size_track' => null,
        'campaign_id' => null,
        'deleted' => 0,
        'featured' => 0,
      ]);
      Product::create([
        'name' => 'Komisyon',
        'product_id' => 2,
        'slug' => 'Komisyon',
        'price' => 0,
        'details' =>'Komisyon',
        'category_id' => 102,
        'brand_id' => null,
        'unit_id' => 1,
        'size_track' => null,
        'campaign_id' => null,
        'deleted' => 0,
        'featured' => 0,
      ]);
      Product::create([
        'name' => 'Barkodsuz Ürün',
        'product_id' => 1,
        'slug' => 'Barkodsuz Ürün',
        'price' => 0,
        'details' =>'Barkodsuz Ürün',
        'category_id' => 104,
        'brand_id' => null,
        'unit_id' => 1,
        'size_track' => null,
        'campaign_id' => null,
        'deleted' => 0,
        'featured' => 0,
      ]);

  }
}
