<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;
    use SearchableTrait;

    public $translatable = ['name', 'notes'];
    protected $appends = ['image','file'];

    public function getImageAttribute()
    {
        return $this->photo != null ? asset('admin/pictures/product/' . $this->id .'/'.$this->photo->Filename ) : null;
    }


    public function getFileAttribute()
    {
        return $this->pdf != null ? asset('admin/bdf/product/' . $this->id .'/'.$this->pdf->Filename ) : null;
    }

    protected $fillable = [
        'name',
        'notes',
        'url',
        'status',
        'price',
    ];

    public function Status()
    {
        return $this->status ? "Active" : 'In Active';
    }


    protected $searchable = [
        'columns' => [
            'products.name' => 10,
            'products.notes' => 10,
        ],
    ];

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }

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
