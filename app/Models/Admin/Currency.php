<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = 'currencies';

    protected $fillable = [
        'code',
        'name',
        'symbol',
        'rate',
        'is_base',
        'active',
    ];
}
