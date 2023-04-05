<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advantage extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    ### RELATIONSHIP ###
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
