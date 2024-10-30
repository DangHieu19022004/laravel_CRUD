<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Constants\Table;

use function Laravel\Prompts\table;

class Book extends Model
{
    protected $table = Table::table_name1;
    protected $primaryKey = Table::tb1_1;
    protected $fillable = [
        Table::tb1_1,
        Table::tb1_2,
        Table::tb1_3,
        Table::tb1_4,
        Table::tb1_5,
        Table::tb1_6
    ];
}
