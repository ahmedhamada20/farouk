<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AfterSale extends Model
{
    use HasFactory;
    protected  $fillable = [
        'name',
        'server_phone',
        'name_1',
        'server_1',
        'name_2',
        'server_2',
        'name_3',
        'server_3',
        'name_4',
        'server_4',
        'name_5',
        'server_5',
    ];
}
