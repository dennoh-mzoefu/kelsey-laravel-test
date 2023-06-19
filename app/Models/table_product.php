<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class table_product extends Model
{
    use SoftDeletes;

    // const DELETED_AT = 'Price';
}
