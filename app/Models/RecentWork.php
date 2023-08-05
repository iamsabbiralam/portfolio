<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecentWork extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'types',
        'thumbnail',
        'description',
        'duration',
        'completion_date',
        'cover_image',
        'sub_image',
    ];
    protected $casts = [
        'completion_date' => 'datetime',
    ];
}
