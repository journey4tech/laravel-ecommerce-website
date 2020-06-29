<?php

namespace App;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use DateTime;
use DateTimeZone;
class Review extends Model
{
    protected  $guarded = ['id'];

    public function getTime()
    {
        $dt = new DateTime($this->created_at);
        $tz = new DateTimeZone('Asia/Dhaka');

        $dt->setTimezone($tz);
        return $dt->format('F j, Y, g:i a');
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }


}
