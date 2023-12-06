<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parties extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'tname',
        'chairman',
        'secretary',
        'standpoint',
        'link'
    ];
    public function titles()
    {
        return $this->hasMany('App\Models\title', 'tid');
    }

    public function delete()
    {
        $this->title()->delete();
        return parent::delete();
    }  
}
