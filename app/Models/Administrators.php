<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Haruncpi\LaravelIdGenerator\IdGenerator;

// CREATED WITH ❤︎ Reezky
// http://itsreezky.my.id

// Class for connect to table mobil

class Administrators extends Authenticatable
{
    use HasFactory,Notifiable;

    protected $guard = 'administrator';
    protected $primaryKey = 'id';

    protected $fillable = [
        'uuid',
        'nama',
        'email',
        'password',
        'status',
    ];

    protected $hidden = 'password';

    public static function boot()
{
    parent::boot();
    self::creating(function ($model) {
        $model->uuid = IdGenerator::generate(['table' => 'administrator', 'field' => 'uuid', 'length' => 8, 'prefix' => 'ADMIN-']);
    });

}

}
