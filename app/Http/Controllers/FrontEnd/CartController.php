<?php

namespace App\Http\Controllers\FrontEnd;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;

use Session;
use Auth;




class CartController extends Controller
{

  public function cartpost(Request $request){
    try {



       $product_qty=$request->qty;
       $product_slug=$request->product_slug;
       $product_color=$request->color;



        $product=Product::findOrFail($request->product_id);
     Cart::add([
         ['id' => $product->id,
             'name' =>$product->product_name,
             'qty' =>$product_qty,
             'price' =>$product->product_price,
             'weight' => 550,
             'options' => [
                 //'size' => 'large',
                 'color'=>$product_color
             ]
         ]
         // ['id' => '5566', 'name' => 'Product 3', 'qty' => 1, 'price' => 10.00, 'weight' => 550, 'options' => ['size' => 'large']]

     ]);
      return redirect()->route('checkoutMe');

    } catch (\Exception $e) {
       return $e->getMessage();

     }

  }




  public function cart(){

     try {

        $cartcontent=Cart::content();
        return view('front.cart.cart',compact('cartcontent'));

     } catch (\Exception $e) {
       return $e->getMessage();

     }

  }

  public function cartpostAjax(Request $request){
    try {
       $request->validate([
         'quantity' => 'required',
         'product_slug' => 'required',
         'rowId' => 'required',
       ]);
       $session_id = Session::getId();
       $product_qty=$request->quantity;
       $product_slug=$request->product_slug;
       $rowId = $request->rowId;
       $product=Product::all()->where('slug', $product_slug)->first();

       $cart  = Cart::add([
           ['id' => $product->id, 'name' =>$product->product_name, 'qty' =>$product_qty, 'price' =>$product->product_price,'rowId'=>$rowId, 'weight' => 550, 'options' => ['size' => 'large']]
           // ['id' => '5566', 'name' => 'Product 3', 'qty' => 1, 'price' => 10.00, 'weight' => 550, 'options' => ['size' => 'large']]
       ]);
      return response()->json($cart);
    } catch (\Exception $e) {
        return response()->json(['description' => $e->getMessage()], 501);
     }

  }

  public function getCartItem(){

     try {
        $cartInfo = new \stdClass();

        $cartcontent=Cart::content();

        $cartInfo->cartData = $cartcontent;

        $cartInfo->total = Cart::total();

        $cartInfo->subTotal = Cart::subtotal();

        return response()->json($cartInfo);

     } catch (\Exception $e) {
       return $e->getMessage();

     }

  }

  public function side_cart(){

     try {

        $cart_content=Cart::content();
        return view('front.partials.side-cart',compact('cart_content'));
        // return view('front.partials.side-cart');

     } catch (\Exception $e) {
       return $e->getMessage();

     }

  }

  public function updateCart(Request $request)
  {
    $request->validate([
      'rowId' => 'required',
      'qty' => 'required'
    ]);
    try {
      $cart = Cart::update($request->rowId, $request->qty); // Will update the quantity

      return response()->json($cart);
    } catch (\Exception $e) {
      return response()->json($e->getMessage(), 502);
    }
  }

  public function destroy( Request $request)
  {
      $content = $request->rowid;
      Cart::remove($content);
      return redirect(route('cart'));
  }


public function clear_cart( Request $request)
    {
      Cart::destroy();
      return redirect(route('cart'));

    }

public function getCartSubtotal()
{
  try {
    $cart = Cart::subtotal();

    return response()->json($cart);
  } catch (\Exception $e) {
    return response()->json($e->getMessage(), 502);
  }
}



}
