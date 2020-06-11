<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductOrder;
class Customer extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    protected  function productOrders()
        {
            return $this->hasMany(ProductOrder::class);

        }

}
