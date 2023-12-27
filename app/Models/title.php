<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class title extends Model
{
    use HasFactory;

    ///protected $table = 'titles';

    protected $fillable = [
        'name',
        'gender',
        'session',
        'title',
        'city',
        'birthday',                         
        'area',
        'cellphone',
        'address',
        'website',
        'tid'
    ];
    public function party()
    {
        return $this->belongsTo('App\Models\party', 'tid', 'id');
    }

    public function scopeSession($query)
    {
        return $query->where('session', '>', 70)->orderBy('session', 'asc');
    }

    //*//////////////////////////////////////////////////////////
    public function scopeAllCity($query)
    { 
        return $query->select('city')->groupBy('city');
    }

    public function scopeCity($query, $pos)
    {
        return $query->where('city', '=', $pos);
    }  
}
