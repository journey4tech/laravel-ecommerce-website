<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;

class WelcomeController extends Controller
{
    public function faq()
        {
          return view('front.pages.faq');
        }

        public function terms()
        {
          return view('front.pages.terms');
        }
        public function compare()
        {
          return view('front.pages.compare');
        }
        public function wishlist()
        {
          return view('front.pages.wishlist');
        }
        public function blog()
        {
          return view('front.pages.blog');
        }
        public function contact()
        {
          return view('front.pages.contact');
        }
        public function about()
        {
          return view('front.pages.about');
        }

        public function shop()
        {
          return view('front.shop.shop');
        }





}
