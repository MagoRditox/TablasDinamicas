<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table2 extends Model
{
    protected $table = 'table_variable';

    public $primarykey = 'id';

    public $timestamps = true;
}
