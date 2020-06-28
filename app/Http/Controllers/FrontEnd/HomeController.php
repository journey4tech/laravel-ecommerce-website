<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Category;
use Carbon\Carbon;
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
            //return $data['menus'];

            $data['sliders'] = Slider::all();
            $data['dailyDeals'] = DailyDeals::with('product')->active()->orderBy('priority','DESC')->get();
            $data['popular_categories']= PopularCategory::with(['category','category.products'=>function($q){
              $q->latest()->take(8);
            }])->active()->orderBy('priority','DESC')->get();
            $data['recommended_products'] = $this->getRecommendedProducts();
            $data['latest_products'] = Product::where('status',1)->latest()->get();
            $data['most_viewed_products'] = Product::where('status',1)->orderByUniqueViews()->latest()->take(20)->get();
            //return $data['most_viewed_products'];
            $data['all_products'] = Product::where('status',1)->where('type', '=','Regular')->latest()->get();
            $data['special_products'] = Product::where('status',1)->where('type', '=',"Special")->latest()->get();
            $data['featured_products'] = Product::where('status',1)->where('type', '=',"Featured")->latest()->get();
            $data['categories'] = SubCategory::with('products')->get();
            $data['feature_c'] = SubCategory::where('status',1)->limit(4)->get();
            $data['ads'] = Ads::all();
          
            $data['carts_count'] = Cart::count();
            //return $data['carts_count'];
            $data['carts'] =Cart::content();


             return view('front.home.home',$data);
           //return $latest_products;
        } catch (\Exception $e) {
            return $e->getMessage();

        }
    }

    public function displayShop()
    {
        try {

            $data = [];
            $data['today'] = date("y-m-d");
            $data['menus'] = Menu::with('categories')->get();
            //return $data['menus'];

            //$data['sliders'] = Slider::all();
            //$data['dailyDeals'] = DailyDeals::with('product')->active()->orderBy('priority','DESC')->get();
           //)->active()->orderBy('priority','DESC')->get();
            //$data['recommended_products'] = $this->getRecommendedProducts();
            $data['latest_products'] = Product::where('status',1)->latest()->get();
            //$data['most_viewed_products'] = Product::where('status',1)->orderByUniqueViews()->latest()->take(20)->get();
            //return $data['most_viewed_products'];
            $data['products'] = Product::latest()->paginate(20);

//            $data['special_products'] = Product::where('status',1)->where('type', '=',"Special")->latest()->get();
//            $data['featured_products'] = Product::where('status',1)->where('type', '=',"Featured")->latest()->get();
//            $data['categories'] = SubCategory::with('products')->get();
//            $data['feature_c'] = SubCategory::where('status',1)->limit(4)->get();
//            $data['ads'] = Ads::all();

            $data['carts_count'] = Cart::count();
            //return $data['carts_count'];
            $data['carts'] =Cart::content();


            return view('front.pages.shop',$data);
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
          $data['carts_count'] = Cart::count();
          //return $data['carts_count'];
          $data['carts'] =Cart::content();
          $data['sliders'] = Slider::all();
          $data['dailyDeals'] = DailyDeals::with('product')->active()->orderBy('priority','DESC')->get();
          $data['popular_categories']= PopularCategory::with(['category','category.products'=>function($q){
              $q->latest()->take(8);
          }])->active()->orderBy('priority','DESC')->get();
          $data['recommended_products'] = $this->getRecommendedProducts();
          $data['latest_products'] = Product::where('status',1)->latest()->get();
           $data['sub_wise_products'] = SubCategory::where('slug',$slug)->with('products')->firstOrFail();
        //return $data['sub_wise_products'];
        return View('front.pages.category-wise-product',$data);

      } catch (\Exception $e) {
        return $e->getMessage();
      }

    }

    public function menus_product($id)
    {

      try {
          $products = [];

//            $subcategories = SubCategory::where('menu_id', $id)->get();
//
//            if ($subcategories) {
//              foreach ($subcategories as $subcategory) {
//                if ($singleProduct = Product::where('sub_category_id', $subcategory->id)->first()) {
//                  $products [] = $singleProduct;
//                }
//              }
//            }

          $data['menus'] = Menu::with('categories')->get();
          $data['menu'] =  Menu::with('categories.products')->where('id', $id)->first();


          return View('front.partials.menu_wise_product',$data);



      } catch (\Exception $e) {
        return $e->getMessage();

      }

    }

    public function category_products($name)
    {

      try {
//            $category_wise_products = [];
//
//            $categories = Category::where('name', $name)->get();
//            //return $categories;
//
//            if ($categories) {
//              foreach ($categories as $category) {
//                if ($singleProduct = Product::where('category_id', $category->id)->first()) {
//                    $category_wise_products [] = $singleProduct;
//                }
//              }
//            }
          $data['menus'] = Menu::with('categories')->get();
          $data['category'] =  Category::with('products')->where('name', $name)->first();
          $data['carts_count'] = Cart::count();
          //return $data['carts_count'];
          $data['carts'] =Cart::content();
          //return $category;

            return View('front.partials.category_wise_product',$data);

      } catch (\Exception $e) {
        return $e->getMessage();

      }

    }



    public function show_product($slug)
     {

       try {
         $data['product']= Product::where('slug',$slug)->firstOrFail();

           //dd ($data['product']->hasDiscount());

//           $data['carts_count'] = Cart::count();
//           //return $data['carts_count'];
//           $data['carts'] =Cart::content();

          $data['related_products'] = Product::where('sub_category_id',$data['product']->sub_category_id)->latest()->get()->except($data['product']->id);
         //return $product;
         //$data['menus']=Menu::with('categories')->get();
         views($data['product'])->record(); //Record Visitor

         return view('front.product.product-details',$data);
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

    public function search(Request $request)
    {


        $data = [];
        $data['today'] = date("y-m-d");
        $data['menus'] = Menu::with('categories')->get();
        $data['carts_count'] = Cart::count();
        //return $data['carts_count'];
        $data['carts'] =Cart::content();
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


        $search = $request->get('term');
        $sub_category_id = $request->get('sub_category_id');
        //return $search .$category_id;

        if($search != null && $sub_category_id !=0){
            $data['results'] = Product::where('sub_category_id', $sub_category_id)
                ->Where(function($q) use($search){
                    $q->where('product_name', 'LIKE', '%'. $search. '%')
                        ->orWhere('product_title','LIKE', '%'. $search. '%')
                        ->OrWhere('description','LIKE', '%'. $search. '%');
                })
                ->latest()
                ->get();


        }




        if($search && $sub_category_id == 0 ){
            $data['results'] = Product::where('product_name', 'LIKE', '%'. $search. '%')
                ->OrWhere('product_title','LIKE', '%'. $search. '%')
                ->OrWhere('product_title','LIKE', '%'. $search. '%')
                ->OrWhere('description','LIKE', '%'. $search. '%')
                ->latest()
                ->get();


        }



        //return $data['results'];

        return view('front.pages.searchProduct', $data);

    }

    public function quickView($slug)
    {

        $data['product']= Product::where('slug',$slug)->firstOrFail();



        $data['carts_count'] = Cart::count();
        //return $data['carts_count'];
        $data['carts'] =Cart::content();


        //return $product;
        $data['menus']=Menu::with('categories')->get();
        views($data['product'])->record(); //Record Visitor
        return view('front.pages.quick-view',$data);
    }

}
