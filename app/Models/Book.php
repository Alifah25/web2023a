<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'book';
    //protected $fillable = ['judul_buku', 'penulis', 'genre', 'penerbit', 'tanggal_terbit', 'stok'];
    protected $guarded = [];
}
