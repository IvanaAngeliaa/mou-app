<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mou_User extends Model
{
    use HasFactory;
    protected $table ='mou_users';
    protected $fillable = [
        'username',
        'fullname',
        'password',
        'profil'
    ];
}
