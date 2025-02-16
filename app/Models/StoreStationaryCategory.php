<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreStationaryCategory extends Model
{
    use HasFactory;

    protected $table='stationarycategory';
    protected $guarded=['id', 'created_at', 'updated_at'];

    public function products()
    {
        return $this->hasMany(StoreStationaryProduct::class, 'category_id');
    }
}
