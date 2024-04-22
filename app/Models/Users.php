<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\Uuid;

// CREATED WITH ❤︎ Reezky
// http://itsreezky.my.id

// Class for connect to table users

class Users extends Authenticatable
{
    use HasFactory, Notifiable,Uuid;

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'uuid',
        'nik',
        'nama',
        'kelamin',
        'email',
        'password',
        'hp',
        'alamat',
        'kota',
        'bank',
        'no_rekening',
        'foto_profile',
        'status',
    ];

}
