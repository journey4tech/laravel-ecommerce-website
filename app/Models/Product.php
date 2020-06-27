<?php

namespace  App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;

class Product extends Model implements ViewableContract
{
  use Viewable;
  protected $removeViewsOnDelete = true;
  protected $guarded = ['id'];
  
//  protected $fillable = ['seller_id','product_name', 'product_title','sub_category_id','product_price',
//  'special_price','start_date','end_date','sku','stock','base_image','multiple','description','color','size','warrantly','status']; //only the field names inside the array can be mass-assign
//


    public function getColorAttribute($value) {
        return strtoupper($value);
    }



    public function setStartAttribute($value){
        $this->attributes['start']  = Carbon::parse($value);
    }

    public function getStartAttribute($value) {
        return date('m/d/Y', strtotime($value));
    }

    public function setEndAttribute($value){
        $this->attributes['end']  = Carbon::parse($value);
    }

    public function getEndAttribute($value) {
        return date('m/d/Y', strtotime($value));
    }

  public function sub_category(){
        return $this->belongsTo('App\Models\SubCategory','sub_category_id','id');
  }

   public function category()
   {
     return $this->hasMany('App\Models\Category');
     //return $this->belongsTo('App\Models\Category','category_id','id');

       //return $this->belongsTo(Category::class);
   }


    public  function discountedAmount(){
        if(Carbon::now()->between(Carbon::parse($this->start), Carbon::parse($this->end))){
            if($this->discount){
                $discounted_price =  $this->product_price - round(($this->product_price*$this->discount)/100);
                return $discounted_price;
            }

            return $this->product_price;
        }else{
            return $this->product_price;
        }

    }

    public function discount(){
        if(Carbon::now()->between(Carbon::parse($this->start), Carbon::parse($this->end))){
            if($this->special_price){
                $discount = round((($this->product_price-$this->special_price)*100)/$this->product_price );
                return $discount;
            }

            return false;
        }else{
            return false;
        }
    }

    public  function hasDiscount(){
        if(!$this->discount()){
            return false;
        }

        return true;
    }



}
