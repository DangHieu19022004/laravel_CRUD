<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    public function flower()
    {
        return $this->belongsTo(Flower::class, 'flower_id', 'id');
    }
    protected $fillable = [
        'id',
        'flower_id',
        'region_name'
    ];
}
