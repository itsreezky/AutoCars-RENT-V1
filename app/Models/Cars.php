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
        'owner_id',
        'kode_mobil',
        'merk',
        'model',
        'plat',
        'transmisi',
        'seat',
        'bahan_bakar',
        'keterangan',
        'tarif',
        'foto_mobil',
        'status',
    ];

    public static function boot()
{
    parent::boot();
    self::creating(function ($model) {
        $model->kode_mobil = IdGenerator::generate(['table' => 'cars', 'field' => 'kode_mobil', 'length' => 10, 'prefix' => 'ACR-']);
    });
}

}
