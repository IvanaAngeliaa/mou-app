<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemakaian extends Model
{
    use HasFactory;
    protected $table = 'pemakaians';
    protected $fillable = [ 
        'id_persediaans',
        'stock',
        'tanggal',
        'kadaluarsa',
        'status'
    ];

    public function persediaan() {
        return $this->belongsTo("App\Models\Persediaan", "id_persediaans");
    }
}
