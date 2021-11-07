<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'original_name',
        'nation',
        'pyramid_level',
        'season',
        'img_name',
        'description',
    ];
    protected $primaryKey = 'code';
    public $incrementing = false;

    public function clubs()
    {
        return $this->hasMany(Club::class, 'in_league', 'code');
    }
}
