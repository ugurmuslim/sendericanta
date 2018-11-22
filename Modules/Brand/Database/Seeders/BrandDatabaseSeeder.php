<?php

namespace Modules\Brand\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Brand\Entities\Brand;

class BrandDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
          'name' => 'North Face',
          'slug' => 'nort-face',
        ]);

        Brand::create([
          'name' => 'Columbia',
          'slug' => 'columbia',
        ]);

        Brand::create([
          'name' => 'Kipling',
          'slug' => 'kipling',
        ]);


        Brand::create([
          'name' => 'Vans',
          'slug' => 'vans',
        ]);

        Brand::create([
          'name' => 'National Geographic',
          'slug' => 'national-geographic',
        ]);

        Brand::create([
          'name' => 'Eastpak',
          'slug' => 'eastpak',
        ]);

        Brand::create([
          'name' => 'ÇÇS',
          'slug' => 'ccs',
        ]);

        Brand::create([
          'name' => 'Delsey',
          'slug' => 'delsey',
        ]);

        Brand::create([
          'name' => 'Fouvor',
          'slug' => 'fouvor',
        ]);

        Brand::create([
          'name' => 'Hummel',
          'slug' => 'hummel',
        ]);

        Brand::create([
          'name' => 'Zenga',
          'slug' => 'zenga',
        ]);

        Brand::create([
          'name' => 'Hayrer',
          'slug' => 'hayrer',
        ]);

        Brand::create([
          'name' => 'Volunteer',
          'slug' => 'volunteer',
        ]);

        Brand::create([
          'name' => 'Pierre Cardin',
          'slug' => 'pierre-cardin',
        ]);

        Brand::create([
          'name' => 'Şen Deri Çanta',
          'slug' => 'sen-deri-canta',
        ]);



    }
}
