<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestSercice extends Model
{
    use HasFactory;

    protected $fillable = [
        'courses_id',
        'packages_id',
        'name',
        'email',
        'phone',
        'jobs',
        'country',
        'customer_id',
        'status',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class, 'courses_id');
    }

    public function packages()
    {
        return $this->belongsTo(Packages::class, 'packages_id');
    }
}
