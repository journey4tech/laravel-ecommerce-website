<?php
namespace App\Helpers;

use Cart;
use Image;

use App\Models\Menu;
use App\Models\Product;

class Helper
{
  public static function getMenus()
  {
    try {
      $menus = Menu::with(['categories','categories.sub_category'])->get();

      return $menus;
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  public static function notifySuccess($message)
  {
    session()->flash('alert-type', 'success');
    session()->flash('message', $message);
  }

  public static function notifyError($message)
  {
    session()->flash('alert-type', 'error');
    session()->flash('message', $message);
  }

  public static function getCartItems()
  {
    $cart_content=Cart::content();
    $cart_collection = collect($cart_content);
    $newcart_content = $cart_content->map(function($item, $key){
      $item_collection = collect($item);
      $product = Product::select()->where('id',$item->id)->first();
      $product_images = json_decode($product->multiple);
      if (count($product_images)>0) {
        $item_collection->put('product_image',$product_images[0]);
      }else{
        $item_collection->put('product_image',NULL);
      }
      return $item_collection;
    });

    return $newcart_content;
  }

  public static function showProductImage($product_id)
  {
    $imagePath = url('/uploads/documents/productimages');
    try {
      $product = Product::findOrFail($product_id);
      $product_images = json_decode($product->multiple);
      if (count($product_images) > 0) {

        return Image::make($imagePath.$product_images[0])->response();
      }
    } catch (\Exception $e) {
      return Image::make($imagePath.'/default/placeholder.png')->response();
    }
  }
}

?>
