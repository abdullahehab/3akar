<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bu extends Model
{
    protected $table = "bu"; // pass table name

    protected $fillable = [
        'bu_name', 'bu_price', 'bu_rent', 'bu_square', 'bu_type', 'bu_small_des', 'bu_meta', 'bu_langtuide', 'bu_latitude', 'bu_large_dis', 'bu_status',  'user_id'

    ];
}
