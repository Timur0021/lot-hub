<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Currency extends Model
{
    use HasTranslations;

    protected $table = 'currencies';

    protected $fillable = [
        'code',
        'name',
        'symbol',
        'rate',
        'is_base',
        'active',
    ];

    public array $translatable = [
        'name',
    ];

    #[Scope]
    public function active(Builder $query): Builder
    {
        return $query->where('active', true);
    }
}
