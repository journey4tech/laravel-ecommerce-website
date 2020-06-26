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
        $customers = Customer::latest()->get();


       return view('admin.orders.index',compact('customers'));

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
    public function show($id)
    {
//        return "hello";
     $customer=Customer::findOrFail($id);
     //return $order;
     $orders = ProductOrder::where('customer_id',$customer->id)->latest()->paginate(10);

    //return $order;

      return view('admin.orders.view',compact('customer','orders'));
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
    public function destroy($id)
    {
      try {

          Customer::findOrFail($id)->delete();


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
          $customer_id = $request->customer_id;

          if($status == 'Pending'){

              $customer = Customer::findOrFail($customer_id);
              $customer->status = $status;
              $customer->save();

                foreach($customer->productOrders as $productOrder){
                    $remaining_quantity =  $productOrder->product->product_quantity + $productOrder->total_order;
                    $product = Product::findOrfail($productOrder->product_id);
                    $product->product_quantity = $remaining_quantity;
                    $product->save();
                }







              Helper::notifySuccess(' Order sent to completion ');
          }


          if($status == 'Completed'){
              $customer = Customer::findOrFail($customer_id);
              $customer->status = $status;
              $customer->save();

              foreach($customer->productOrders as $productOrder){
                  $remaining_quantity =  $productOrder->product->product_quantity - $productOrder->total_order;
                  $product = Product::findOrfail($productOrder->product_id);
                  $product->product_quantity = $remaining_quantity;
                  $product->save();
              }



              Helper::notifySuccess(' Order Completed !! ');
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

//      public function delivered_order(){
//        try {
//          $delivered_orders=Order::where('status','Deliverd')->get();
//          return view('admin.orders.delivered',compact('delivered_orders'));
//
//        } catch (\Exception $e) {
//
//        }
//
//
//      }

      public function completed_order(){
        try {
            $completedCustomers = Customer::where('status','Completed')->latest()->get();
           // return $customers;

          return view('admin.orders.index-completed',compact('completedCustomers'));

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
