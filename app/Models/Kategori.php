<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table ='kategoris';
    protected $fillable = [
        'id',
        'namakategori'
    ];

    public function persediaan()
    {
        return $this->hasMany('App\Models\Persediaan', 'id');
    }
}
