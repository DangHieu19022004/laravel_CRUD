<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    use HasFactory; // fake data
    // public $timestamps = false; //k tinh timestamps

    protected $fillable = [
        'id',
        'name',
        'description',
        'image_url'
    ];
}
