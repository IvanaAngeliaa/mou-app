<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    
    public $table = 'produks';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $auditTimestamps = true;

    public $fillable = [ 
        'id',
        'namaproduk',
        'deskripsi',
        'harga',
        'foto'
    ];
}
