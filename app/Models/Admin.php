<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public $table = 'admins';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $auditTimestamps = true;

    public $fillable = [ 
        'id',
        'username',
        'fullname',
        'password'
    ];
}
