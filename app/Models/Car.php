<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function carmodel()
    {
        return $this->belongsTo(CarModel::class, 'car_models_id');
    }
}
