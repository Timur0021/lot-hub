<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class TextInSite extends Model
{
    protected $table = 'text_in_sites';

    protected $fillable = [
        'key',
        'text',
        'active',
    ];
}
