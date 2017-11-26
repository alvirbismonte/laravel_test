<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table    = 'films';
    
    protected $fillable = [

    ];
    

    public function films()
    {
        return $this->hasMany('App\Genre', 'id', 'films_id');
    }
}
