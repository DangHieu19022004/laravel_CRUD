<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    protected $primaryKey = 'BorrowingID';
    public function book(){
        return $this->belongsTo(Book::class, 'BookID', 'BookID');
    }
    protected $fillable = [
        'BorrowingID',
        'BookID',
        'MemberID',
        'BorrowDate',
        'DueDate',
        'ReturnedDate'
    ];
}
