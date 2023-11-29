<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;

    ///protected $table = 'title';

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
    
}
