<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerReviews extends Model
{
    use HasFactory;

    protected $fillable = [
        'previous_works_id',
        'name',
        'company_name',
        'learn',
    ];

    protected $appends = ['image'];

    public function getImageAttribute()
    {
        return $this->photo != null ? asset('admin/pictures/customerReviews/' . $this->id .'/'.$this->photo->Filename ) : null;
    }

    public function previous_works()
    {
        return $this->belongsTo(PreviousWork::class, 'previous_works_id');
    }

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
}
