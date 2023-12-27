<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
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
        return $this->hasMany('App\Models\Title', 'tid');
    }
    
    public function delete()
    {
        $this->titles()->delete();
        return parent::delete();
    }

    public function scopeStandpoint($query, $standpoint)
    {
        return $query->where('standpoint', '=', $standpoint);
    }
}
