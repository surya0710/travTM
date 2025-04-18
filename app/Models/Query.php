<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    use HasFactory;

    protected $table = 'query';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'destination',
        'travelDate',
        'travellers',
        'message',
    ];
}
