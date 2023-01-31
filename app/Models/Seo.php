<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;
    protected $fillable = [
        'notes',
        'seoable_type',
        'seoable_id',
    ];

    public function seoable()
    {
        return $this->morphTo('App\Models\Seo');
    }
}
