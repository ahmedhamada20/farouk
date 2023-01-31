<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class FeaturesPackages extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['name'];
    protected $fillable = [
        'package_id',
        'name',
    ];

    public function package()
    {
        return $this->belongsTo(Packages::class,'package_id');
    }
}
