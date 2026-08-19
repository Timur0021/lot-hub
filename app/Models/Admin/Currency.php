<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
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

    #[Scope]
    public function active(Builder $query): Builder
    {
        return $query->where('active', true);
    }
}
