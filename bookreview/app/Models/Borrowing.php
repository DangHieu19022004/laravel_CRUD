<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Constants\Table;

class Borrowing extends Model
{
    protected $table = Table::table_name2;
    protected $primaryKey = Table::tb2_1;
    // public function book(){
    //     return $this->belongsTo(Book::class, 'BookID', 'BookID');
    // }
    // public function user(){
    //     return $this->belongsTo(Book::class, 'UserID', 'id');
    // }
    protected $fillable = [
        Table::tb2_1,
        Table::tb2_2,
        Table::tb2_3,
        Table::tb2_4,
        Table::tb2_5,
        Table::tb2_6,
        Table::tb2_7
    ];
}
