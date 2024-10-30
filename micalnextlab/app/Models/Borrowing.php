<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Constants\Table;

class Borrowing extends Model
{
    protected $table = Table::table_name2;
    protected $primaryKey = Table::tb2_1;
    public function book(){
        return $this->belongsTo(Book::class, 'type_id', 'id');
    }
    protected $fillable = [
        Table::tb2_1,
        Table::tb2_2,
        Table::tb2_3,
        Table::tb2_4,
        Table::tb2_5,
        Table::tb2_6,
        Table::tb2_7,
        Table::tb2_8
    ];
}
