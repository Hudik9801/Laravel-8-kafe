<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');

    }
    public function user()
    {
        return $this->belongsTo(User::class);

    }
    public function order()
    {
        return $this->belongsTo(Order::class);

    }


    public function odemesekli()
    {
        return $this->hasMany(odemesekli::class);

    }


}
