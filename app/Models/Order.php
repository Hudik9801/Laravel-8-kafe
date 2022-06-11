<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function orderitem()
    {
        return $this->hasMany(Orderitem::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
