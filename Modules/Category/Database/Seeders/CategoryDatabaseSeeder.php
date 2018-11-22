<?php

namespace Modules\Category\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Category\Entities\Category;

class CategoryDatabaseSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    Category::create([
      'id' => '1',
      'name' => 'Erkek',
      'slug' => 'erkek',
      'number_low' => "10",
      'number_high' => "11",
    ]);

    Category::create([
      'id' => '2',
      'name' => 'Kadın',
      'slug' => 'kadin',
      'number_low' => "12",
      'number_high' => "13",
    ]);

    Category::create([
      'id' => '3',
      'name' => 'Unisex',
      'slug' => 'unisex',
      'number_low' => "14",
      'number_high' => "15",
    ]);

    Category::create([
    'id' => '4',
    'name' => 'Valiz',
    'slug' => 'valiz',
    'number_low' => "19",
    'number_high' => "20",
    ]);


    Category::create([
      'id' => '5',
      'name' => 'Tamir',
      'slug' => 'tamir',
      'number_low' => "16",
      'number_high' => "17",
      ]);

      Category::create([
      'id' => '6',
      'name' => 'Tasarım',
      'slug' => 'tasarim',
      'number_low' => "18",
      'number_high' => "19",
      ]);

      Category::create([
      'name' => 'Sırt Çantası',
      'slug' => 'sırt-cantasi',
      'head_category_id' => '1',
      'number_low' => "100000",
      'number_high' => "109999",
      ]);

      Category::create([
      'name' => 'Erkek Yandan Asmalı Çanta ',
      'slug' => 'erkek-yandan-asmali-canta',
      'head_category_id' => '1',
      'number_low' => "110000",
      'number_high' => "119999",
      ]);

      Category::create([
      'name' => 'Erkek Bel Çantası',
      'slug' => 'erkek-bel-cantasi',
      'head_category_id' => '1',
      'number_low' => "120000",
      'number_high' => "129999",
      ]);

      Category::create([
      'name' => 'Erkek Evrak Çantası',
      'slug' => 'erkek-evrak-cantasi',
      'head_category_id' => '1',
      'number_low' => "130000",
      'number_high' => "139999",
      ]);

      Category::create([
      'name' => 'Erkek Kemer',
      'slug' => 'erkek-kemer',
      'head_category_id' => '1',
      'number_low' => "140000",
      'number_high' => "149999",
      ]);

      Category::create([
      'name' => 'Kadın Yandan Asmalı Çanta',
      'slug' => 'kadin-yandan-asmali-canta',
      'head_category_id' => '2',
      'number_low' => "150000",
      'number_high' => "159999",
      ]);

      Category::create([
      'name' => 'Kadın Bel Çantası',
      'slug' => 'kadin-bel-cantasi',
      'head_category_id' => '2',
      'number_low' => "160000",
      'number_high' => "169999",
      ]);

      Category::create([
      'name' => 'Kadın Evrak Çantası',
      'slug' => 'kadin-evrak-cantasi',
      'head_category_id' => '2',
      'number_low' => "170000",
      'number_high' => "179999",
      ]);

      Category::create([
      'name' => 'Kadın Cüzdan',
      'slug' => 'kadin-cüzdan',
      'head_category_id' => '2',
      'number_low' => "180000",
      'number_high' => "189999",
      ]);

      //
    /*  Category::create([
      'name' => 'Unisex Sırt Çantası',
      'slug' => 'unisex-sirt-cantasi',
      'head_category_id' => '3',
      'number_low' => "160000",
      'number_high' => "169999",
      ]);

      Category::create([
      'name' => 'Unisex Yandan Asmalı Çanta',
      'slug' => 'unisex-yandan-asmali-canta',
      'head_category_id' => '3',
      'number_low' => "170000",
      'number_high' => "179999",
      ]);
      */

      Category::create([
      'name' => 'Valiz',
      'slug' => 'valize',
      'head_category_id' => '4',
      'number_low' => "190000",
      'number_high' => "199999",
      'no_price' => true,
      ]);

      Category::create([
      'name' => 'Kabin Boy Valiz',
      'slug' => 'kabin-boy-valiz',
      'head_category_id' => '4',
      'number_low' => "200000",
      'number_high' => "209999",
      'no_price' => true,
      ]);

      Category::create([
      'name' => 'Pilot Çantası',
      'slug' => 'pilot-cantasi',
      'head_category_id' => '4',
      'number_low' => "210000",
      'number_high' => "219999",
      'no_price' => true,
      ]);

      Category::create([
      'name' => 'Evrak Çekçekli',
      'slug' => 'evrak-cekcekli',
      'head_category_id' => '4',
      'number_low' => "220000",
      'number_high' => "229999",
      'no_price' => true,
      ]);

      Category::create([
      'name' => 'Spor Valiz',
      'slug' => 'spor-valiz',
      'head_category_id' => '4',
      'number_low' => "230000",
      'number_high' => "239999",
      'no_price' => true,
      ]);


      Category::create([
      'name' => 'Çanta Tamir',
      'slug' => 'canta-tamir',
      'head_category_id' => '5',
      'number_low' => "240000",
      'number_high' => "249999",
      'no_price' => true,
      ]);

      Category::create([
      'name' => 'Bavul Tamir',
      'slug' => 'bavul-tamir',
      'head_category_id' => '5',
      'number_low' => "250000",
      'number_high' => "259999",
      'no_price' => true,
      ]);

      Category::create([
      'name' => 'Cüzdan Tamir',
      'slug' => 'cüzdan-tamir',
      'head_category_id' => '5',
      'number_low' => "260000",
      'number_high' => "269999",
      'no_price' => true,
      ]);

      Category::create([
      'name' => 'Kemer Tamir',
      'slug' => 'kemer-tamir',
      'head_category_id' => '5',
      'number_low' => "279000",
      'number_high' => "279999",
      'no_price' => true,
      ]);

      Category::create([
      'name' => 'Deri Ürün Tamir',
      'slug' => 'dei-urun-tamir',
      'head_category_id' => '5',
      'number_low' => "280000",
      'number_high' => "289999",
      'no_price' => true,
      ]);



      Category::create([
      'name' => 'Çanta Tasarımları',
      'slug' => 'canta-tasarımlari',
      'head_category_id' => '6',
      'number_low' => "290000",
      'number_high' => "299999",
      'no_price' => true,
      ]);

      Category::create([
      'name' => 'Kemer Tasarımları',
      'slug' => 'kemer-tasarimlari',
      'head_category_id' => '6',
      'number_low' => "300000",
      'number_high' => "309999",
      'no_price' => true,
      ]);

      Category::create([
      'name' => 'Enstrüman Kılıfı Özel Tasarımları',
      'slug' => 'enstruman-kilifi-tasarimlari',
      'head_category_id' => '6',
      'number_low' => "310000",
      'number_high' => "319999",
      'no_price' => true,
      ]);


      Category::create([
        'id' => '101',
        'name' => 'Kampanya',
        'slug' => 'Kampanya',
        'number_low' => "101",
        'number_high' => "102",
      ]);

      Category::create([
        'id' => '102',
        'name' => 'Komisyon',
        'slug' => 'Komisyon',
        'number_low' => "102",
        'number_high' => "103",
      ]);


      Category::create([
        'id' => '103',
        'name' => 'İndirim',
        'slug' => 'indirim',
        'number_low' => "103",
        'number_high' => "104",
      ]);


      Category::create([
        'id' => '104',
        'name' => 'Barkodsuz Ürün',
        'slug' => 'barkodsuz-ürün',
        'number_low' => "104",
        'number_high' => "105",
      ]);

    }
  }
