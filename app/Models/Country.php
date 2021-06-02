<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\State;

class Country extends Model
{

    protected $fillable = ['name'];

    public function location()
    {
        return $this->hasOne(location::class, 'country_id', 'id');
                                              // campo      campo
                                              // tabela     tabela
                                              // filho      mãe deste model
    }

    public function states()
    {
        return $this->hasMany(State::class, 'country_id', 'id');
    }

    public function cities()
    {
        return $this->hasManyThrough(City::class, State::class);
    }
}
