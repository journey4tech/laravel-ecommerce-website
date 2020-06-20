<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Models\Product;
use App\Order;
use App\ProductOrder;
use Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
  public function __construct ()
  {
    $this->middleware('auth:admin');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //$pending_orders=Order::where('status','pending')->get();
        //$customers = Customer::latest()->get();
        $productOrders = ProductOrder::latest()->get();

       return view('admin.orders.index',compact('productOrders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(ProductOrder $order)
    {
//        return "hello";
//      $order=Order::findOrFail($id);

      return view('admin.orders.view',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductOrder $order)
    {
      try {

        $order->delete();

         Helper::notifySuccess(' Order Deleted ');
         return back();
        } catch (\Exception $e) {
          Helper::notifyError($e->getMessage());
          return back();
        }
   }

   //public function destroy($id)
//    {
//      try {
//        $order =ProductOrder::findOrFail($id);
//        $order->delete();
//
//         Helper::notifySuccess(' Order Deleted ');
//         return back();
//        } catch (\Exception $e) {
//          Helper::notifyError($e->getMessage());
//          return back();
//        }
//    }

    public function updateStatus(Request $request , $id)
    {

      try {

        $status = Order::findOrFail($id);
        $status->status = $request->status;
        $status->save();

        Helper::notifySuccess(' Order Status Updated ');
        return back();
      } catch (\Exception $e) {
        Helper::notifyError($e->getMessage());
        return back();
      }
    }

    public function statusChange(Request $request)
    {


      try {
          $status = $request->status;
          $order_id = $request->order_id;

          if($status == 'Pending'){

              $productOrder = ProductOrder::findOrFail($order_id);
              $productOrder->status = $status;
              $productOrder->save();

              $remaining_quantity =  $productOrder->product->product_quantity + $productOrder->total_order;


              $product = Product::findOrfail($productOrder->product_id);
              $product->product_quantity = $remaining_quantity;
              $product->save();

              Helper::notifySuccess(' Order Status Updated ');
          }

          if($status == 'Confirmed'){
              $productOrder = ProductOrder::findOrFail($order_id);
              $productOrder->status = $status;
              $productOrder->save();

              $remaining_quantity =  $productOrder->product->product_quantity - $productOrder->total_order;


              $product = Product::findOrfail($productOrder->product_id);
              $product->product_quantity = $remaining_quantity;
              $product->save();

              Helper::notifySuccess(' Order Status Updated ');
          }


        return back();
      } catch (\Exception $e) {
        Helper::notifyError($e->getMessage());
        return back();
      }
    }



      public function confrimed_order(){
        try {
          $confrimed_order=Order::where('status','Confrimed')->get();
          return view('admin.orders.confirmed',compact('confrimed_order'));

        } catch (\Exception $e) {

        }

      }

      public function delivered_order(){
        try {
          $delivered_orders=Order::where('status','Deliverd')->get();
          return view('admin.orders.delivered',compact('delivered_orders'));

        } catch (\Exception $e) {

        }


      }
}
