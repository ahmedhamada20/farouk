<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Exam extends Model
{
    use HasFactory;

    use HasTranslations;

    public $translatable = [
        'name',
        'answer_one',
        'answer_two',
        'answer_there',
        'answer_four',
        'answer',
    ];

    protected $fillable = [
        'name',
        'answer_one',
        'answer_two',
        'answer_there',
        'answer_four',
        'answer',
        'time',
        'status',
    ];

    public function Status()
    {
        return $this->status ? "Active" : 'In Active';
    }

    protected $searchable = [
        'columns' => [
            'exams.name' => 10,
            'exams.answer_one' => 10,
            'exams.answer_two' => 10,
            'exams.answer_there' => 10,
            'exams.answer_four' => 10,
            'exams.answer' => 10,
        ],
    ];

}
