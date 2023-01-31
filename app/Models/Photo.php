<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $table = "photos";

    protected $fillable = [
        'Filename',
        'photoable_type',
        'photoable_id',
    ];

    public function photoable()
    {
        return $this->morphTo('App\Models\Photo');
    }
}
