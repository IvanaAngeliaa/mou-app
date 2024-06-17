<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persediaan extends Model
{
    use HasFactory;
    protected $table ='persediaans';
    protected $fillable = [
        'kategori',
        'namabarang',
        'minimalstock',
        'satuan'
    ];
}
