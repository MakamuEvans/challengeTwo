<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = ['order_number'];

    //relations
    public function orderDetails(){
        return $this->hasMany(OrderDetail::class, 'order_id');
    }
}
