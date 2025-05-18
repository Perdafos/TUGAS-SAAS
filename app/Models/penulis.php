<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penulis extends Model
{
    use HasFactory;
    protected $table = 'penulis';
     protected $fillable = [
        'judul',
        'penulis',
        'isbn'
    ];
    public $timestamps = false;
}
