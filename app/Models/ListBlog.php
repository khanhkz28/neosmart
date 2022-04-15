<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListBlog extends Model
{
    use HasFactory;
    protected $table='listblog';
    protected $fillable = [
        'title',
        'description'
    ];
}
