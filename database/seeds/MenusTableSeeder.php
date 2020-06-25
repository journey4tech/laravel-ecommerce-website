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
            'name' => 'PC',
            'description' => 'None',
            'slug' => Str::slug('pc'),
            'status' => 1
          ],
          [
            'name' => 'Technology',
            'description' => 'None',
             'slug' => Str::slug('technology'),
            'status' => 1
          ],


        ]);


        $categories = Category::insert([
          [
            'name' => 'Desktop',
            'menu_id' => 1,
            'description' => 'None',
            'status' => 1
          ],
          [
            'name' => 'Laptop',
            'menu_id' => 1,
            'description' => 'None',
            'status' => 1
          ],
            [
            'name' => 'Excessories',
            'menu_id' => 2,
            'description' => 'None',
            'status' => 1
          ],
            [
            'name' => 'Simple Item',
            'menu_id' => 2,
            'description' => 'None',
            'status' => 1
          ],


        ]);

        $sub_categories = SubCategory::insert([
          [
            'menu_id' => 1,
            'category_id' => 1,
            'name' => 'Budget PC',
            'description' => 'None',
            'slug' => Str::slug('budget pc'),

            'status' => 1,
          ],
            [
            'menu_id' => 1,
            'category_id' => 2,
            'name' => 'Dell',
            'description' => 'None',
            'slug' => Str::slug('dell'),

            'status' => 1,
          ],
            [
            'menu_id' => 1,
            'category_id' => 2,
            'name' => 'Lenovo',
            'description' => 'None',
            'slug' => Str::slug('Lenovo'),

            'status' => 1,
          ],

            [
            'menu_id' => 2,
            'category_id' => 3,
            'name' => 'Wifi',
            'description' => 'None',
            'slug' => Str::slug('wifi'),

            'status' => 1,
          ],
            [
            'menu_id' => 2,
            'category_id' => 3,
            'name' => 'Bluetooth',
            'description' => 'None',
            'slug' => Str::slug('Bluetooth'),

            'status' => 1,
          ],
            [
            'menu_id' => 2,
            'category_id' => 4,
            'name' => 'Speaker',
            'description' => 'None',
            'slug' => Str::slug('Speaker'),

            'status' => 1,
          ],
            [
            'menu_id' => 2,
            'category_id' => 4,
            'name' => 'LoudSpeaker',
            'description' => 'None',
            'slug' => Str::slug('LoudSpeaker'),

            'status' => 1,
          ],





        ]);
    }
}
