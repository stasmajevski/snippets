<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Step extends Model
{
    protected $fillable = [
        'order',
        'title',
        'body',
        'uuid'
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function(Step $step) {
            $step->uuid = Str::uuid();
        });
    }
}
