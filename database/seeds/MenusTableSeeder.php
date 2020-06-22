<?php

use Illuminate\Database\Seeder;

// Models
use App\Models\Menu;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = Menu::insert([
          [
            'name' => 'Desktop',
            'description' => 'None',
            'slug' => Str::slug('Desktop'),
            'status' => 1
          ],
          [
            'name' => 'Laptop',
            'description' => 'None',
             'slug' => Str::slug('Laptop'),
            'status' => 1
          ],

            [
            'name' => 'Monitor',
            'description' => 'None',
             'slug' => Str::slug('Monitor'),
            'status' => 1
          ]
        ]);


        $categories = Category::insert([
          [
            'name' => 'Budget Desktop',
            'menu_id' => 1,
            'description' => 'None',
            'status' => 1
          ],
          [
            'name' => 'High Configuration Desktop',
            'menu_id' => 1,
            'description' => 'None',
            'status' => 1
          ],
          [
            'name' => 'Asus Laptop',
            'menu_id' => 2,
            'description' => 'None',
            'status' => 1
          ],
          [
            'name' => 'Lenovo Laptop',
            'menu_id' => 2,
            'description' => 'None',
            'status' => 1
          ],
          [
            'name' => 'Asus',
            'menu_id' => 3,
            'description' => 'None',
            'status' => 1
          ],
          [
            'name' => 'Lenovo',
            'menu_id' => 3,
            'description' => 'None',
            'status' => 1
          ],

        ]);

//        $sub_categories = SubCategory::insert([
//          [
//            'menu_id' => 1,
//            'category_id' => 1,
//            'name' => 'PC1',
//            'description' => 'None',
//            'slug' => Str::slug('PC1'),
//
//            'status' => 1,
//          ],
//            [
//            'menu_id' => 1,
//            'category_id' => 2,
//            'name' => 'PC2',
//            'description' => 'None',
//            'slug' => Str::slug('PC2'),
//
//            'status' => 1,
//          ],
//
//            [
//            'menu_id' => 1,
//            'category_id' => 3,
//            'name' => 'HightConguration1',
//            'description' => 'None',
//            'slug' => Str::slug('HightConguration1'),
//
//            'status' => 1,
//          ],
//            [
//            'menu_id' => 2,
//            'category_id' => 2,
//            'name' => 'HightConguration2',
//            'description' => 'None',
//            'slug' => Str::slug('HightConguration2'),
//
//            'status' => 1,
//          ],
//            [
//            'menu_id' => 2,
//            'category_id' => 1,
//            'name' => 'Leonovo1',
//            'description' => 'None',
//            'slug' => Str::slug('Leonovo1'),
//            'status' => 1,
//          ],
//            [
//            'menu_id' => 2,
//            'category_id' => 3,
//            'name' => 'Leonovo2',
//            'description' => 'None',
//            'slug' => Str::slug('Leonovo2'),
//            'status' => 1,
//          ],
//
//            [
//            'menu_id' => 2,
//            'category_id' => 2,
//            'name' => 'HP1',
//            'description' => 'None',
//            'slug' => Str::slug('HP1'),
//            'status' => 1,
//          ],
//            [
//            'menu_id' => 2,
//            'category_id' => 2,
//            'name' => 'HP2',
//            'description' => 'None',
//            'slug' => Str::slug('HP2'),
//            'status' => 1,
//          ],
//
//
//
//
//
//
//
//
//
//        ]);
    }
}
