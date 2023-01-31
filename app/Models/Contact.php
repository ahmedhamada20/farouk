<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'subject',
        'phone',
        'activity',
        'name_comppany',
        'type_company',
        'Message',
        'type_contact',
        'data',
        'time',
        'notes',
    ];

    const HOMECONTECT = 0;
    const PAGECONTENTUS = 1;
    const PAGECONSULTING= 2;
    const AGENCY= 3;
    const JOP= 4;
    const WHATSAPP= 5;
}
