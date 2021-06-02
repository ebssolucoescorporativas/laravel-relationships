<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

class Location extends Model
{

    protected $fillable = ['latitude', 'longitude'];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
