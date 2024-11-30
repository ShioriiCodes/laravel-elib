<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploads extends Model
{
    use HasFactory;

    // Add 'title' to the $fillable array
    protected $fillable = [
        'title', 'image', 'file', 'description',
      
    ];
}