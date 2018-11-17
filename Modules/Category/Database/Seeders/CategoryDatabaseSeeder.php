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
      'name' => 'Tamir',
      'slug' => 'tamir',
      'number_low' => "16",
      'number_high' => "17",
      ]);

      Category::create([
      'id' => '5',
      'name' => 'Tasarım',
      'slug' => 'tasarim',
      'number_low' => "18",
      'number_high' => "19",
      ]);

      Category::create([
      'name' => 'Erkek Sırt Çantası',
      'slug' => 'erkek-sırt-cantasi',
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
      'name' => 'Erkek Cüzdan',
      'slug' => 'erkek-cuzdan',
      'head_category_id' => '1',
      'number_low' => "120000",
      'number_high' => "129999",
      ]);


      Category::create([
      'name' => 'Kadın Sırt Çantası',
      'slug' => 'kadin-sirt-cantasi',
      'head_category_id' => '2',
      'number_low' => "130000",
      'number_high'=> "139999",
      ]);


      Category::create([
      'name' => 'Kadın Yandan Asmalı Çanta',
      'slug' => 'kadin-yandan-asmali-canta',
      'head_category_id' => '2',
      'number_low' => "140000",
      'number_high' => "149999",
      ]);

      Category::create([
      'name' => 'Kadın Cüzdan',
      'slug' => 'kadin-cüzdan',
      'head_category_id' => '2',
      'number_low' => "150000",
      'number_high' => "159999",
      ]);

      //
      Category::create([
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

      Category::create([
      'name' => 'Çanta Tamir',
      'slug' => 'canta-tamir',
      'head_category_id' => '4',
      'number_low' => "180000",
      'number_high' => "189999",
      'no_price' => true,
      ]);

      Category::create([
      'name' => 'Kemer Tamir',
      'slug' => 'kemer-tamir',
      'head_category_id' => '4',
      'number_low' => "199000",
      'number_high' => "199999",
      'no_price' => true,
      ]);
      Category::create([
      'name' => 'Çanta Tasarımları',
      'slug' => 'canta-tasarımlari',
      'head_category_id' => '5',
      'number_low' => "200000",
      'number_high' => "209999",
      'no_price' => true,
      ]);

      Category::create([
      'name' => 'Kemer Tasarımları',
      'slug' => 'kemer-tasarimlari',
      'head_category_id' => '5',
      'number_low' => "210000",
      'number_high' => "219999",
      'no_price' => true,
      ]);

      Category::create([
      'name' => 'Valiz',
      'slug' => 'valiz',
      'number_low' => "220000",
      'number_high' => "229999",
      ]);
    }
  }
