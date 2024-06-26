<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sub_title',
        'content',
        'category',
        'cuisine',
        'recipes',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'date',
    ];
}
