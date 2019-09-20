<?php

namespace App\Http\Controllers\FrontEnd\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Auth;

class CustomerController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
      return view('customer.home.home');
  }

  public function orders(){
    $orders = Order::with('customer')->where('customer_id', Auth::user()->id)->get();
    return view('customer.orders.index',compact('orders'));
  }

}
