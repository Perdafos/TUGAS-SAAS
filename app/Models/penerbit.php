<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penerbit extends Model
{
    use HasFactory;
    protected $table = 'penerbit';
     protected $fillable = [
        'nama',
        'alamat',
        'telp',
        'email'
    ];
    public $timestamps = false;
}
