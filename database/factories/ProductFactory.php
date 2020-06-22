<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Product::class, function (Faker $faker) {

    return [
        'product_name' => $faker->name,
        'product_title' => $faker->text,
        'category_id' => \App\Models\Category::all()->random()->id,
        'type' => $faker->randomElement(['Regular','Featured','Special']),
        'slug' => Str::slug($faker->firstName),
        'product_price' => $faker->numberBetween(100,1000),
        'special_price' => $faker->numberBetween(100,1000)-50,
        'start_date' => \Carbon\Carbon::now(),
        'end_date' => \Carbon\Carbon::now(),
        'product_quantity' => $faker->numberBetween(5,50),
        'sku' => Str::random(4),
        'stock' => $faker->numberBetween(5,50),
        'multiple' => json_encode(['/demo/1.jpg','/demo/2.jpg','/demo/3.jpg','/demo/4.jpg','/demo/5.jpg','/demo/6.jpg','/demo/7.jpg']),
        'description' => 'চীনের সঙ্গে লাদাখে সংঘর্ষের পর ভারতীয় সেনাবাহিনী তাদের আগের নীতি থেকে সরে আসছে। এখন থেকে ভারতীয় ফিল্ড কমান্ডাররা ‘ব্যতিক্রমী’ পরিস্থিতিতে আগ্নেয়াস্ত্র ব্যবহার করতে পারবে। এর আগে ভারতের প্রধানমন্ত্রী নরেন্দ্র মোদিও বলেছেন, পরিস্থিতি মোকাবিলায় সেনাবাহিনীকে পূর্ণ স্বাধীনতা দেওয়া হয়েছে।

ভারত ও চীন স্বাক্ষরিত ১৯৯৬ ও ২০০৫ সালের চুক্তি অনুযায়ী, একে অপরের বিরুদ্ধে আগ্নেয়াস্ত্র ব্যবহার করবে না। দুই দেশের মধ্যে সংঘর্ষে আগ্নেয়াস্ত্র ব্যবহার বন্ধ করার বিষয়ে প্রথম চুক্তি হয়েছিল ১৯৯৬ সালে। সংঘাত যাতে ছড়িয়ে না পড়ে, তাই দুই দেশের মধ্যে বিরোধপূর্ণ সীমান্ত এলাকায় গোলাগুলি ও বিস্ফোরকের ব্যবহার নিষিদ্ধ করা হয় ওই চুক্তিতে।',
        'color' => json_encode(['yellow','Black']),
        'video_link' => 'https://www.youtube.com/watch?v=E2wa0BTHRMs',
        'warranty' => $faker->numberBetween(1,3),
        'status' => '1',
    ];
});
