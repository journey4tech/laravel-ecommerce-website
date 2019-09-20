<?php

namespace App\Models;

use App\Models\Product;
// Models
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
      protected $fillable =["name","description","menu_icon","status"];
//categories relation
      public function categories()
      {
        // return $this->belongsToMany(self::class,'categories','id','menu_id');
        return $this->hasMany(Category::class);
      }
      
//product relation
      public function products()
      {
        return $this->belongsToMany(Product::class,'categories','id','menu_id');
      }




}
