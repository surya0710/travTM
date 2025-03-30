<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;

    protected $table = 'pages';

    protected $fillable = [
        'name',
        'title',
        'slug',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'meta_image',
        'status',
        'image',
        'content',
    ];
}
