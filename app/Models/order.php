<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->belongsTo(customer ::class);
    }

    public function product()
    {
        return $this->belongsTo(product::class);
    }
}
