<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Number extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['name', 'notes'];
    protected $fillable = [
        'name',
        'notes',
        'status',
        'phone',
    ];

    protected $appends = ['image'];

    public function getImageAttribute()
    {
        return $this->photo != null ? asset('admin/pictures/number/' . $this->id .'/'.$this->photo->Filename ) : null;
    }

    public function Status()
    {
        return $this->status ? "Active" : 'In Active';
    }


    protected $searchable = [
        'columns' => [
            'numbers.name' => 10,
            'numbers.notes' => 10,
        ],
    ];

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }

    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }

}
