<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use SoftDeletes;

    protected $fillable = ['order_id', 'product_id'];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
