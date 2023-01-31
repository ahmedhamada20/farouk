<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Packages extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['name', 'notes'];
    protected $fillable = [
        'name',
        'notes',
        'status',
        'price',
        'category_id',
    ];

    protected $appends = ['image'];

    public function getImageAttribute()
    {
        return $this->photo != null ? asset('admin/pictures/packages/' . $this->id .'/'.$this->photo->Filename) : null;
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function Status()
    {
        return $this->status ? "Active" : 'In Active';
    }


    protected $searchable = [
        'columns' => [
            'packages.name' => 10,
            'packages.notes' => 10,
        ],
    ];

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }

    public function featuresPackages()
    {
        return $this->hasMany(FeaturesPackages::class,'package_id');
    }


    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }
}
