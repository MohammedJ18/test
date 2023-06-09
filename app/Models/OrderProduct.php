<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    protected $table = 'order_product';
    protected $fillable = [
        'order_id',
        'product_id',
    ];
    ### RELATIONSHIPS ###
    public function order_product_advantages()
    {
        return $this->hasMany(OrderProductAdvantage::class);
    }
}
