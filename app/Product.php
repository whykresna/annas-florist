<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $guarded = [];

    public function getStatusLabelAttribute()
    {
        if ($this->status == 1) {
            return '<div class="product-tag sale-tag"><a href="#">Sale</a></div>';
        } elseif ($this->status == 2) {
            return '<div class="product-tag"><a href="#">Hot</a></div>';
        } else {
            return '';
        }
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
}
