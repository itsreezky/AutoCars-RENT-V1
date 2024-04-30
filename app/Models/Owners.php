<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Traits\Uuid;


// CREATED WITH ❤︎ Reezky
// http://itsreezky.my.id

// Class for connect to table mobil

class Owners extends Authenticatable
{
    use HasFactory,Notifiable,Uuid;

    protected $guard = 'owners';
    protected $primaryKey = 'id';

    protected $fillable = [
        'owner_id',
        'nik',
        'nama',
        'kelamin',
        'email',
        'password',
        'hp',
        'alamat_garasi',
        'kota',
        'foto_ktp',
        'foto_profile',
        'status',
    ];

    protected $hidden = 'password';

    public static function boot()
{
    parent::boot();
    self::creating(function ($model) {
        $model->owner_id = IdGenerator::generate(['table' => 'owners', 'field' => 'owner_id', 'length' => 10, 'prefix' => 'ARCown-']);
    });

}

}
