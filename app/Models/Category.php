<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;
    use HasTranslations;
    use SearchableTrait;

    public $translatable = ['name', 'notes'];

    protected $appends = ['image'];

    public function getImageAttribute()
    {
        return $this->photo != null ? asset('admin/pictures/category/' . $this->id . '/' . $this->photo->Filename) : null;
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
            'categories.name' => 10,
            'categories.notes' => 10,
        ],
    ];

    public function packages()
    {
        return $this->hasMany(Packages::class, 'category_id');
    }

    public function course()
    {
        return $this->hasMany(Course::class, 'category_id');
    }

    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }

    public function numberCategory()
    {
        return $this->hasOne(NumberService::class, 'category_id')->where('category_id',$this->id)->first()->number;
    }

}
