<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\Controller;
Use Auth;
use Session;
Use App\Models\Order;
use App\PaymentMethod;
use App\ShippingZone;



class CheckOutController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }


    public function checkout(){
      try {

        $cartcontent= Cart::content();
        $s_zones= ShippingZone::all();
        $pay_methods= PaymentMethod::all();
        return view('front.checkout.checkout',compact('cartcontent','pay_methods','s_zones'));

      } catch (\Exception $e) {
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
}
