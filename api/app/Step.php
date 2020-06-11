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

    public function afterOrder()
    {
        //self - entire collection
        //$this - current object
        $adjacent = self::where('order', '>', $this->order)
            ->orderBy('order', 'asc')
            ->first();

        if(!$adjacent) {
            return self::orderBy('order', 'desc')->first()->order + 1;
        }

        return ($this->order + $adjacent->order) / 2;
    }

    public function beforeOrder()
    {
        $adjacent = self::where('order', '<', $this->order)
            ->orderBy('order', 'desc')
            ->first();

        if(!$adjacent) {
            return self::orderBy('order', 'asc')->first()->order - 1;
        }

        return ($this->order + $adjacent->order) / 2;
    }
}
