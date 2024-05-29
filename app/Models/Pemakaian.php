<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemakaian extends Model
{
    use HasFactory;
    
    public $table = 'pemakaians';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $auditTimestamps = true;

    public $fillable = [ 
        'id',
        'idpakai',
        'stock',
        'tanggal',
        'kadaluarsa',
        'status'
    ];
}
