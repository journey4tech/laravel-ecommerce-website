<?php

namespace App\Http\Controllers\FrontEnd;

use App\Customer;

use App\ProductOrder;
use http\Url;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\Controller;
Use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Validator;
use Session;
Use App\Models\Order;
use App\PaymentMethod;
use App\ShippingZone;
use Helper;


use App\Ads;
use App\Models\Menu;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\DailyDeals;
use App\Models\PopularCategory;


class CheckOutController extends Controller
{

//    public function __construct()
//    {
//      $this->middleware('auth');
//    }


    public function checkout(){
      try {

        $cartcontent= Cart::content();
        //$s_zones= ShippingZone::all();
        //$pay_methods= PaymentMethod::all();
        return view('front.checkout.checkout',compact('cartcontent'));

      } catch (\Exception $e) {
        return $e->getMessage();
      }


    }

    public function cartList()
    {

        $data = [];
        $data['today'] = date("y-m-d");
        $data['menus'] = Menu::with('categories')->get();

        $data['carts_count'] = Cart::count();
        //return $data['carts_count'];
        $data['carts'] =Cart::content();


        $data['carts_count'] = Cart::count();



        return view('front.pages.cart-item',$data);
    }

    public function productOrderConfirm(Request $request)
    {
        try {

            $rules = [
                'name' => 'required',
                'phone' => 'required',
                'district' => 'required',
                'address' => 'required',
            ];

            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }


            $carts = Cart::content();
            //return $carts->name;




            if(! empty($carts)){
                $customer = new Customer();
                $customer->name = $request->name;
                $customer->phone = $request->phone;
                $customer->district = $request->district;
                $customer->address = $request->address;
                $customer->payment_type = $request->payment_type ?? 'Cash On Delivery';
                $customer->our_bkash_no = $request->our_bkash_no ?? null;
                $customer->your_bkash_no = $request->your_bkash_no ?? null;
                $customer->status = 'Pending';
                $customer->save();
                $data = [];
                foreach($carts as $cart){
                    $data = new ProductOrder();
                    $data->customer_id= $customer->id;
                    $data->product_id= $cart->id;
                    $data->product_name = $cart->name;
                    $data->product_price = $cart->price;
                    $data->total_order = $cart->qty;
                    $data->color = $cart->options->color;
                    $data->status ='Pending';
                    $data->save();
                }
            }






            Cart::destroy();

            //Helper::notifySuccess('Order Taken, We will contact you soon !!! ');
            Alert::success('Success', 'Order Taken, We will contact you soon !!');
            return redirect()->back();
//                ->with([
//                'alert-type' => 'success',
//                'message' => 'We will contact you soon !!!'
//            ]);
        }
        catch (\Exception $e) {
            return $e->getMessage();

        }
    }

    public function orderConfirm(Request $request)
    {
        try {



            $cart = Cart::content();

            return $cart;
            $data = new Order;
            $data['customer_id']=1;
            $data->product_id = json_encode($request->product_id);
            $data->product_name = json_encode($request->product_name);
            $data->product_price = $request->product_price;
            $data->product_qty = json_encode($request->product_qty);
            $data->delivery_address = $request->delivery_address;
            $data->home_address = $request->home_address;
            $data->phone_number = $request->phone_number;
            $data->payment_method = 'Cash on Delivery';
            $data->status ='Pending';
            $data->save();
            Cart::destroy();


            return redirect()->back()->with([
                'alert-type' => 'success',
                'message' => 'We will contact you soon !!!'
            ]);
        }
        catch (\Exception $e) {
            return $e->getMessage();

        }
    }


    public function store(Request $request)
   {
      try {
        $this->validate($request,[
            'customer_id' => 'required|max:191',

        ]);

         $customer_id = Auth::user()->id;
         $cart = Cart::content();
         $data = new Order;
          $data['customer_id']=$customer_id;
          $data->product_id = json_encode($request->product_id);
          $data->product_name = json_encode($request->product_name);
          $data->product_price = $request->product_price;
          $data->product_qty = json_encode($request->product_qty);
          $data->delivery_address = $request->delivery_address;
          $data->home_address = $request->home_address;
          $data->phone_number = $request->phone_number;
          $data->payment_method = $request->payment_method;
          $data->status ='Pending';
          $data->save();
          Cart::destroy();


      return redirect('customer/orders')->with([
        'alert-type' => 'success',
        'message' => 'Order have been submited Sucessfully'
      ]);
     }
       catch (\Exception $e) {
        return $e->getMessage();

      }

}



    public function checkoutProduct(){
        // $data['districts'] = json_decode( file_get_contents(base_path().'/data/district.json'));
        $data['districts'] = json_decode(file_get_contents(public_path('/data/').'district.json'));




        $data['menus'] = Menu::with('categories')->get();

        $data['carts_count'] = Cart::count();
        //return $data['carts_count'];
        $data['carts'] =Cart::content();


          return view('front.pages.checkout',$data);
    }
}
