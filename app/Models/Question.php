<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Spatie\Translatable\HasTranslations;

class Question extends Model
{
    use HasFactory;
    use HasTranslations;
    use SearchableTrait;

    public $translatable = ['name', 'notes'];
    protected $appends = ['file'];



    public function getFileAttribute()
    {
        return $this->pdf != null ? asset('admin/bdf/question/' . $this->id .'/'.$this->pdf->Filename ) : null;
    }

    protected $fillable = [
        'name',
        'notes',
        'status',
        'courses_id',
    ];

    public function Status()
    {
        return $this->status ? "Active" : 'In Active';
    }

    public function courses()
    {
        return $this->belongsTo(Course::class,'courses_id');
    }


    protected $searchable = [
        'columns' => [
            'questions.name' => 10,
            'questions.notes' => 10,
        ],
    ];


    public function pdf()
    {
        return $this->morphOne(PDF::class, 'pdfable');
    }
}
