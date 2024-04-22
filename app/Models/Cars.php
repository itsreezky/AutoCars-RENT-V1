<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Haruncpi\LaravelIdGenerator\IdGenerator;

// CREATED WITH ❤︎ Reezky
// http://itsreezky.my.id

// Class for connect to table mobil

class Cars extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'cars';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'kode_mobil',
        'merk',
        'model',
        'plat',
        'tarif',
        'keterangan',
        'spesifikasi',
        'foto_mobil1',
        'foto_mobil2',
        'foto_mobil3',
        'foto_mobil4',
        'status',
    ];

    public static function boot()
{
    parent::boot();
    self::creating(function ($model) {
        $model->kode_mobil = IdGenerator::generate(['table' => 'mobil', 'field' => 'kode_mobil', 'length' => 10, 'prefix' => 'ACR-']);
    });
}

}
