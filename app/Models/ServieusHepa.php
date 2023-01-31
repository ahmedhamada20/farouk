<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServieusHepa extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'server',
        'name_4',
        'server_4',
        'name_5',
        'server_5',
        'name_6',
        'server_6',
        'name_7',
        'server_7',
        'phone',
        'server_phone',
        'name_1',
        'server_1',
        'name_2',
        'server_2',
        'name_3',
        'server_3',
    ];
}
