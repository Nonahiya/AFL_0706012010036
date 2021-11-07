<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'city',
        'stadium',
        'apparel',
        'sponsor',
        'coach',
        'captain',
        'in_league',
        'img_name',
        'description',
    ];
    public function league()
    {
        return $this->belongsTo(League::class, 'in_league', 'code');
    }
}
