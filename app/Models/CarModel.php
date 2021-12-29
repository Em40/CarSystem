<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
