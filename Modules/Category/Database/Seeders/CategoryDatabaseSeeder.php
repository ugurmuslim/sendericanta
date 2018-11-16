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
      'name' => 'Tamit',
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
      'id' => '6',
      'name' => 'Sırt Çantası',
      'slug' => 'erkek-sırt-cantasi',
      'head_category_id' => '1',
      'number_low' => "100000",
      'number_high' => "109999",
      ]);


      Category::create([
      'id' => '7',
      'name' => 'Yandan Asmalı Çanta ',
      'slug' => 'erkek-yandan-asmali-canta',
      'head_category_id' => '1',
      'number_low' => "110000",
      'number_high' => "119999",
      ]);

      Category::create([
      'id' => '8',
      'name' => 'Cüzdan',
      'slug' => 'erkek-cuzdan',
      'head_category_id' => '1',
      'number_low' => "120000",
      'number_high' => "129999",
      ]);


      Category::create([
      'id' => '8',
      'name' => 'Sırt Çantası',
      'slug' => 'kadin-sirt-cantasi',
      'head_category_id' => '2',
      'number_low' => "130000",
      'number_high'=> "139999",
      ]);


      Category::create([
      'id' => '9',
      'name' => 'Yandan Asmalı Çanta',
      'slug' => 'kadin-yandan-asmali-canta',
      'head_category_id' => '2',
      'number_low' => "140000",
      'number_high' => "149999",
      ]);

      Category::create([
      'id' => '10',
      'name' => 'Cüzdan',
      'slug' => 'kadin-cüzdan',
      'head_category_id' => '2',
      'number_low' => "150000",
      'number_high' => "159999",
      ]);

      //
      Category::create([
      'id' => '11',
      'name' => 'Sırt Çantası',
      'slug' => 'unisex-sirt-cantasi',
      'head_category_id' => '3',
      'number_low' => "160000",
      'number_high' => "169999",
      ]);

      Category::create([
      'id' => '12',
      'name' => 'Yandan Asmalı Çanta',
      'slug' => 'unisex-yandan-asmali-canta',
      'head_category_id' => '3',
      'number_low' => "170000",
      'number_high' => "179999",
      ]);

      Category::create([
      'id' => '13',
      'name' => 'Çanta Tamir',
      'slug' => 'canta-tamir',
      'head_category_id' => '4',
      'number_low' => "180000",
      'number_high' => "189999",
      ]);
      Category::create([
      'id' => '14',
      'name' => 'Kemer Tamir',
      'slug' => 'kemer-tamir',
      'head_category_id' => '4',
      'number_low' => "199000",
      'number_high' => "199999",
      ]);
      Category::create([
      'id' => '15',
      'name' => 'Çanta Tasarımları',
      'slug' => 'canta-tasarımlari',
      'head_category_id' => '5',
      'number_low' => "200000",
      'number_high' => "209999",
      ]);

      Category::create([
      'id' => '16',
      'name' => 'Kemer Tasarımları',
      'slug' => 'kemer-tasarimlari',
      'head_category_id' => '5',
      'number_low' => "210000",
      'number_high' => "219999",
      ]);

      Category::create([
      'id' => '17',
      'name' => 'Valiz',
      'slug' => 'valiz',
      'number_low' => "220000",
      'number_high' => "229999",
      ]);
    }
  }
