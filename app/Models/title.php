<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;

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
        return $this->belongsTo('App\Models\Party', 'tid', 'id');
    }

    public function scopeSession($query)
    {
        return $query->where('session', '>', 70)->orderBy('session', 'asc');
    }

    public function scopeAllCities($query)
    { 
        return $query->select('city')->groupBy('city');
    }

    public function scopeCity($query, $ci)
    {
        return $query->where('city', '=', $ci);
    }    

}
