<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $table='faq';
    protected $fillable = [
        'title',
        'content',
        'display'
    ];
    function scopeGetAll(){
        return $this->orderBy('id','asc')->paginate(10);
    }
}
