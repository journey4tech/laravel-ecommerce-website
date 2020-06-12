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
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{


    public function index()
    {
        try {

            $data = [];
            $data['today'] = date("y-m-d");
            $data['menus'] = Menu::with('categories')->get();

            $data['sliders'] = Slider::all();
            $data['dailyDeals'] = DailyDeals::with('product')->active()->orderBy('priority','DESC')->get();
            $data['popular_categories']= PopularCategory::with(['category','category.products'=>function($q){
              $q->latest()->take(8);
            }])->active()->orderBy('priority','DESC')->get();
            $data['recommended_products'] = $this->getRecommendedProducts();
            $data['latest_products'] = Product::where('status',1)->latest()->get();
            $data['most_view'] = Product::where('status',1)->orderByUniqueViews()->take(3)->get();
            $data['all_products'] = Product::where('status',1)->where('type', '=','Regular')->latest()->get();
            $data['special_products'] = Product::where('status',1)->where('type', '=',"Special")->latest()->get();
            $data['featured_products'] = Product::where('status',1)->where('type', '=',"Featured")->latest()->get();
            $data['categories'] = SubCategory::with('products')->get();
            $data['feature_c'] = SubCategory::where('status',1)->limit(4)->get();
            $data['ads'] = Ads::all();
          
            $data['carts_count'] = Cart::count();
             return view('front.home.home',$data);
           //return $latest_products;
        } catch (\Exception $e) {
            return $e->getMessage();

        }
    }


    public function sub_categories_product($slug)
    {

      try {

          $data = [];
          $data['today'] = date("y-m-d");
          $data['menus'] = Menu::with('categories')->get();

          $data['sliders'] = Slider::all();
          $data['dailyDeals'] = DailyDeals::with('product')->active()->orderBy('priority','DESC')->get();
          $data['popular_categories']= PopularCategory::with(['category','category.products'=>function($q){
              $q->latest()->take(8);
          }])->active()->orderBy('priority','DESC')->get();
          $data['recommended_products'] = $this->getRecommendedProducts();
          $data['latest_products'] = Product::where('status',1)->latest()->get();
           $data['sub_wise_products'] = SubCategory::where('slug',$slug)->with('products')->firstOrFail();
        //return $data['sub_wise_products'];
        return View('front.partials.category_wise_product',$data);

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
         $latest_products = Product::where('status',1)->where('type', '=','Regular')->latest()->get();
         //return $product;
         $menus=Menu::with('categories')->get();
         views($product)->record(); //Record Visitor

         return view('front.product.product-details',compact('product','menus','latest_products'));
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

    public function placeOrder(Request $request)
    {
       Session::put('qty',$request->qty);

       return redirect()->route('provide.info');


    }

    public function provideInformation()
    {
        
    }

}
