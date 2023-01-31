<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'start_data',
        'end_data',
        'use_coupon', // عدد المستخدمين المسموح بيهم
        'used_coupon', // عدد المستخدمين المسموح الذي تم الاستخدام الكود
        'discount_percentage',
    ];

}
