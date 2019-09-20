<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Helper;
use App\Ads;
use App\Models\Menu;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\DailyDeals;
use App\Models\PopularCategory;

class HomeController extends Controller
{


    public function index()
    {
        try {

            $today= date("y-m-d");
            $menus=Menu::all();
            $slider=Slider::all();
            $dailyDeals = DailyDeals::with('product')->active()->orderBy('priority','DESC')->get();
            $popular_categories = PopularCategory::with(['category','category.products'=>function($q){
              $q->latest()->take(8);
            }])->active()->orderBy('priority','DESC')->get();
            $recommended_products = $this->getRecommendedProducts();
            $new_arrival = Product::where('status',1)->latest()->take(3)->get();
            $most_view = Product::where('status',1)->orderByUniqueViews()->take(3)->get();
            $all_products=Product::where('status',1)->get();
            $categories = SubCategory::with('products')->get();
            $feature_c =SubCategory::where('status',1)->limit(4)->get();
            $ads=Ads::all();
            $carts_count=Cart::count();
            return view('front.master',
            compact('all_products','menus','slider','dailyDeals','categories','popular_categories','ads','feature_c','recommended_products','carts_count','new_arrival','most_view'));

        } catch (\Exception $e) {
            return $e->getMessage();

        }
    }


    public function sub_categories_product($slug)
    {

      try {

        $sub_c_wise_products = SubCategory::where('slug',$slug)->with('products')->firstOrFail();
        return View('front.product.category_wise_product',compact('sub_c_wise_products'));

      } catch (\Exception $e) {
        return $e->getMessage();
      }

    }

    public function menus_product($id)
    {

      try {
            $products = [];

            $subcategories = SubCategory::where('menu_id', $id)->get();

            if ($subcategories) {
              foreach ($subcategories as $subcategory) {
                if ($singleProduct = Product::where('sub_category_id', $subcategory->id)->first()) {
                  $products [] = $singleProduct;
                }
              }
            }

            return View('front.product.menu_product',compact('products'));

      } catch (\Exception $e) {
        return $e->getMessage();

      }

    }

    public function category_products($id)
    {

      try {
            $products = [];

            $subcategories = SubCategory::where('category_id', $id)->get();

            if ($subcategories) {
              foreach ($subcategories as $subcategory) {
                if ($singleProduct = Product::where('sub_category_id', $subcategory->id)->first()) {
                  $products [] = $singleProduct;
                }
              }
            }

            return View('front.product.category_product',compact('products'));

      } catch (\Exception $e) {
        return $e->getMessage();

      }

    }



    public function show_product($slug)
     {
       try {
         $product=Product::where('slug',$slug)->firstOrFail();

         views($product)->record(); //Record Visitor

         return view('front.product.product-details',compact('product'));
       } catch (\Exception $e) {
         abort(404);
       }

     }

     public function categories_product($slug)
     {

       try {

             $sub_c_wise_products = SubCategory::where('slug',$slug)->with('products')->firstOrFail();
             return View('front.home.home',compact('sub_c_wise_products'));

       } catch (\Exception $e) {
         return $e->getMessage();
       }

     }

   public function post_contact(Request $request){
     try {
       $this->validate($request, [
        'name' => 'required',
        'description' => 'required',
      ]);
       $contact=new Contact();
       $contact->name=$request->name;
       $contact->email=$request->email;
       $contact->phone=$request->phone;
       $contact->description=$request->description;
       $contact->status=1;
       $contact->save();
      Helper::notifySuccess(' Your Contact is Procedure');
      return redirect(route('contact'));
     } catch (\Exception $e) {
      Helper::notifyError($e->getMessage());
      return back();
     }
   }

   public function viewRecommendedProducts()
   {
     try {
       $products = Product::where('status', 1)->paginate(12);
       $recommended_products = $products->map(function($item, $key){
         $product_images = json_decode($item->multiple);
         if (count($product_images)>0) {
           $item->product_image = url('/uploads/documents/productimages').$product_images[0];
         }else{
           $item->product_image = null;
         }

         return $item;
       });
       return view('front.home.partials.recommended-products', compact('recommended_products'));
       // return response()->json($new_product_details);
     } catch (\Exception $e) {
       return response()->json(['error' => $e->getMessage()], 502);
     }

   }

   private function getRecommendedProducts(){
     try {
       $products = Product::where('status', 1)->paginate(12);
       $new_product_details = $products->map(function($item, $key){
         $product_images = json_decode($item->multiple);
         if (count($product_images)>0) {
           $item->product_image = url('/uploads/documents/productimages').$product_images[0];
         }else{
           $item->product_image = null;
         }

         return $item;
       });
       return $new_product_details;
     } catch (\Exception $e) {
       return $e->getMessage();
     }
   }

}
