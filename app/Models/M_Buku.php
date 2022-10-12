<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class M_Buku extends Model
{
    use softDeletes;

    protected $table = 'Buku';
    protected $fillable = [
        'judul_buku',
        'pengarang',
        'penerbit',
        'harga',
        'isbn',
        'thterbit'
    ];
    protected $hidden;
}
