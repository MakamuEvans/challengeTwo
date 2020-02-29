<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SupplierProduct extends Model
{
    use SoftDeletes;

    protected $fillable = ['supply_id', 'product_id'];

    //relations
    public function supplier(){
        return $this->belongsTo(Supplier::class, 'supply_id');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
