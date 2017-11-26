<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table    = 'films';
    
    protected $fillable = [
    	'name','slug','description','release_date','rating','ticket_price','country','photo',
    ];
    

    public function genres()
    {
        return $this->hasMany('App\Genre');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
