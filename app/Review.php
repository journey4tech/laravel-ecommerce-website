<?php

namespace App;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected  $guarded = ['id'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
