<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'date_city',
        'eventName',
        'privacy',
        'submitted_at',
        'page_url',
    ];
    use HasFactory;
}
