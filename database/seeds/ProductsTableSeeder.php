<?php

use Illuminate\Database\Seeder;

use App\Models\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
      $products = Product::insert([
        [
          'product_name' => 'Desktop with Intel CoreI3',
          'product_title' => ' Desktop with Intel CoreI3',
          'category_id' => '1',
          'type' => 'Regular',
          'slug' => Str::slug('Desktop with Intel CoreI3'),
          'product_price' => '200',
          'special_price' => '100',
          'start_date' => '10/12/19',
          'end_date' => '10/12/19',
          'product_quantity' => 5,
          'sku' => 'dhjadskj',
          'stock' => '10',
          'multiple' => json_encode(['/demo/product_9.jpg','/demo/product_10.jpg','/demo/product_11.jpg']),
          'description' => 'dahjfakhjhfffffffffjahds',
          'color' => json_encode(['yellow','Black']),
          'video_link' => 'https://www.youtube.com/watch?v=E2wa0BTHRMs',
          'warrantly' => '2',
          'status' => '1',

        ],
          [
          'product_name' => 'Desktop with Intel Dual Core',
          'product_title' => ' Desktop with Intel Dual Core',
          'category_id' => '1',
          'type' => 'Special',
          'slug' => Str::slug('Desktop with Intel Dual Core'),
          'product_price' => '200',
          'special_price' => '100',
          'start_date' => '10/12/19',
          'end_date' => '10/12/19',
          'product_quantity' => 5,
          'sku' => 'dhjadskj',
          'stock' => '10',
          'multiple' => json_encode(['/demo/product_9.jpg','/demo/product_10.jpg','/demo/product_11.jpg']),
          'description' => 'dahjfakhjhfffffffffjahds',
          'color' => json_encode(['yellow','Black']),
          'video_link' => 'https://www.youtube.com/watch?v=E2wa0BTHRMs',
          'warrantly' => '2',
          'status' => '1',

        ],

          [
          'product_name' => 'High Desktop with Intel Dual Core',
          'product_title' => 'High  Desktop with Intel Dual Core',
          'category_id' => '2',
          'type' => 'Featured',
          'slug' => Str::slug('High Desktop with Intel Dual Core'),
          'product_price' => '200',
          'special_price' => '100',
          'start_date' => '10/12/19',
          'end_date' => '10/12/19',
          'product_quantity' => 5,
          'sku' => 'dhjadskj',
          'stock' => '10',
          'multiple' => json_encode(['/demo/product_9.jpg','/demo/product_10.jpg','/demo/product_11.jpg']),
          'description' => 'dahjfakhjhfffffffffjahds',
          'color' => json_encode(['yellow','Black']),
          'video_link' => 'https://www.youtube.com/watch?v=E2wa0BTHRMs',
          'warrantly' => '2',
          'status' => '1',

        ],
          [
          'product_name' => 'High Desktop with Intel Dual Core 2',
          'product_title' => 'High  Desktop with Intel Dual Core2',
          'category_id' => '2',
          'type' => 'Regular',
          'slug' => Str::slug('High Desktop with Intel Dual Core2'),
          'product_price' => '200',
          'special_price' => '100',
          'start_date' => '10/12/19',
          'end_date' => '10/12/19',
          'product_quantity' => 5,
          'sku' => 'dhjadskj',
          'stock' => '10',
          'multiple' => json_encode(['/demo/product_9.jpg','/demo/product_10.jpg','/demo/product_11.jpg']),
          'description' => 'dahjfakhjhfffffffffjahds',
          'color' => json_encode(['yellow','Black']),
          'video_link' => 'https://www.youtube.com/watch?v=E2wa0BTHRMs',
          'warrantly' => '2',
          'status' => '1',

        ],

          [
          'product_name' => 'Asus Laptop with Intel Dual Core 2',
          'product_title' => 'Asus Laptop with Intel Dual Core2',
          'category_id' => '3',
          'type' => 'Special',
          'slug' => Str::slug('Asus Laptop with Intel Dual Core2'),
          'product_price' => '200',
          'special_price' => '100',
          'start_date' => '10/12/19',
          'end_date' => '10/12/19',
          'product_quantity' => 5,
          'sku' => 'dhjadskj',
          'stock' => '10',
          'multiple' => json_encode(['/demo/product_9.jpg','/demo/product_10.jpg','/demo/product_11.jpg']),
          'description' => 'dahjfakhjhfffffffffjahds',
          'color' => json_encode(['yellow','Black']),
          'video_link' => 'https://www.youtube.com/watch?v=E2wa0BTHRMs',
          'warrantly' => '2',
          'status' => '1',

        ],
          [
          'product_name' => 'Lenovo Laptop with Intel Dual Core 2',
          'product_title' => 'Lenovo Laptop with Intel Dual Core2',
          'category_id' => '4',
          'type' => 'Featured',
          'slug' => Str::slug('Lenovo Laptop with Intel Dual Core2'),
          'product_price' => '200',
          'special_price' => '100',
          'start_date' => '10/12/19',
          'end_date' => '10/12/19',
          'product_quantity' => 5,
          'sku' => 'dhjadskj',
          'stock' => '10',
          'multiple' => json_encode(['/demo/product_9.jpg','/demo/product_10.jpg','/demo/product_11.jpg']),
          'description' => 'dahjfakhjhfffffffffjahds',
          'color' => json_encode(['yellow','Black']),
          'video_link' => 'https://www.youtube.com/watch?v=E2wa0BTHRMs',
          'warrantly' => '2',
          'status' => '1',

        ],

          [
          'product_name' => 'Lenovo Monitor',
          'product_title' => 'Lenovo monitor',
          'category_id' => '6',
          'type' => 'Regular',
          'slug' => Str::slug('Lenovo monitor'),
          'product_price' => '200',
          'special_price' => '100',
          'start_date' => '10/12/19',
          'end_date' => '10/12/19',
          'product_quantity' => 5,
          'sku' => 'dhjadskj',
          'stock' => '10',
          'multiple' => json_encode(['/demo/product_9.jpg','/demo/product_10.jpg','/demo/product_11.jpg']),
          'description' => 'dahjfakhjhfffffffffjahds',
          'color' => json_encode(['yellow','Black']),
          'video_link' => 'https://www.youtube.com/watch?v=E2wa0BTHRMs',
          'warrantly' => '2',
          'status' => '1',

        ],

          [
          'product_name' => 'Asus Monitor',
          'product_title' => 'Asus monitor',
          'category_id' => '5',
          'type' => 'Special',
          'slug' => Str::slug('Asus monitor'),
          'product_price' => '200',
          'special_price' => '100',
          'start_date' => '10/12/19',
          'end_date' => '10/12/19',
          'product_quantity' => 5,
          'sku' => 'dhjadskj',
          'stock' => '10',
          'multiple' => json_encode(['/demo/product_9.jpg','/demo/product_10.jpg','/demo/product_11.jpg']),
          'description' => 'dahjfakhjhfffffffffjahds',
          'color' => json_encode(['yellow','Black']),
          'video_link' => 'https://www.youtube.com/watch?v=E2wa0BTHRMs',
          'warrantly' => '2',
          'status' => '1',

        ],


      ]);

    }
}
