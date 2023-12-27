<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
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
        return $this->belongsTo('App\Models\Party','tid','id');
    }
    Public function scopegender($query,$gender)
    {
      $query->where('gender','=',$gender);
    }
    public function scopeallcitys($query)
    {
      return $query->select('city')->groupBy('city');
    }
    public function scopecity($query,$pos)
    {
      return $query->where('city','=',$pos);
    }
}
