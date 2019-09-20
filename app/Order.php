<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class Order extends Model
{
  protected $fileable=['customer_id','product_id','product_name','product_price',
  'product_qty','home_address','delivery_address','phone_number','payment_method'];

  //Customer relation
  public function customer(){
    return $this->belongsTo('App\User','customer_id','id');
  }
  //Product relation
  public function orders_product(){
    return $this->belongsTo(Product::class,'product_id','id');
  }
  //payment method relation
  public function pay_method(){
    return $this->belongsTo('App\PaymentMethod','payment_method','id');
  }
  // seller product relation


}
