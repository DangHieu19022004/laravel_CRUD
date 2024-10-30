<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primayKey = 'BookID';
    protected $fillable = [
        'BookID',
        'Title',
        'Author',
        'ISBN',
        'PublishedYear',
        'Genre'
    ];
}
