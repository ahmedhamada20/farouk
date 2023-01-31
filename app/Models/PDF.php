<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PDF extends Model
{
    use HasFactory;
    protected $table = "p_d_f_s";

    protected $fillable = [
        'Filename',
        'pdfable_type',
        'pdfable_id',
    ];

    public function pdfable()
    {
        return $this->morphTo('App\Models\PDF');
    }
}
