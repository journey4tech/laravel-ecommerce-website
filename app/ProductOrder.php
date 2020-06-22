<?php

namespace App;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
