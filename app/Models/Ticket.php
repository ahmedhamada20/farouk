<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        "customer_id",
        "user_id",
        "ticketNumbers",
        "category_id",
        "status",
        "message",
        "image",
    ];

    protected $appends = ['image'];

    public function getImageAttribute()
    {
        return $this->photo != null ? asset('admin/pictures/ticket/' . $this->id . '/' . $this->photo->Filename) : null;
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function ticketReplys()
    {
        return $this->hasMany(TicketReply::class, 'ticket_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }


    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }

}
