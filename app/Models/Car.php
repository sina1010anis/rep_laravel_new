<?php

namespace App\Models;

use App\Models\Scopes\GetGoodData;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'model', 'published'];

    public function scopeGetGoodData(Builder $builder): Builder // Local Scope
    {

        return $builder->wherePublished(true)->latest('id')->limit(10);

    }

    protected static function booted(): void // Global Scope
    {

        static::addGlobalScope(new GetGoodData());

    }
}
