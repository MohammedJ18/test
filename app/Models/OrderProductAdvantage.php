<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProductAdvantage extends Model
{
    use HasFactory;
    protected $fillable = ['order_product_id', 'advantage_id'];
    ### RELATIONSHIPS ###
    public function orderProduct()
    {
        return $this->belongsTo(OrderProduct::class);
    }

}
