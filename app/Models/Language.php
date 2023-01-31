<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Spatie\Translatable\HasTranslations;

class Language extends Model
{
    use HasFactory;
    use HasTranslations;
    use SearchableTrait;

    protected $fillable = [
        'name',
        'notes',
        'status',
    ];

    public function Status()
    {
        return $this->status ? "Active" : 'In Active';
    }


    protected $searchable = [
        'columns' => [
            'languages.name' => 10,
            'languages.notes' => 10,
        ],
    ];


}
