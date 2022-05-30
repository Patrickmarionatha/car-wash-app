<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = ['id', 'qr'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
