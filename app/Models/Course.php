<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Spatie\Translatable\HasTranslations;

class Course extends Model
{
    use HasFactory;
    use HasTranslations;
    use SearchableTrait;

    public $translatable = ['name', 'notes' , 'notes1', 'notes2'];
    protected $appends = ['image','file'];

    public function getImageAttribute()
    {
        return $this->photo != null ? asset('admin/pictures/course/' . $this->id .'/'.$this->photo->Filename ) : null;
    }


    public function getFileAttribute()
    {
        return $this->pdf != null ? asset('admin/bdf/course/' . $this->id .'/'.$this->pdf->Filename ) : null;
    }

    protected $fillable = [
        'name',
        'notes',
        'url',
        'status',
        'notes1',
        'notes2',
        'price',
        'category_id',
    ];


    public function questions()
    {
        return $this->hasMany(Question::class,'courses_id');
    }

    public function previousWorks()
    {
        return $this->hasMany(PreviousWork::class,'courses_id');
    }

    public function Status()
    {
        return $this->status ? "Active" : 'In Active';
    }

    protected $searchable = [
        'columns' => [
            'courses.name' => 10,
            'courses.notes' => 10,
        ],
    ];

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }

//    public function photos()
//    {
//        return $this->morphMany(Photo::class, 'photoable');
//    }

    public function pdf()
    {
        return $this->morphOne(PDF::class, 'pdfable');
    }

        public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }

}
