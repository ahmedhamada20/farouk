<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Spatie\Translatable\HasTranslations;

class Gallery extends Model
{
    use HasFactory;
    use HasTranslations;
    use SearchableTrait;

    public $translatable = ['name', 'notes'];
    protected $appends = ['file'];




    public function getImageAttribute()
    {
        return $this->photo != null ? asset('admin/pictures/gallery/' . $this->id . '/' . $this->photo->Filename) : null;
    }

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
            'galleries.name' => 10,
            'galleries.notes' => 10,
        ],
    ];

    public function photos()
    {
        return $this->morphMany(Photo::class, 'photoable');
    }

    public function pdf()
    {
        return $this->morphOne(PDF::class, 'pdfable');
    }

    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }
}
