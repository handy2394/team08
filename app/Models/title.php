<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class titles extends Model
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
    public function paryt()
    {
        return $this->belongsTo('App\Models\party', 'tid', 'id');
    }


}
