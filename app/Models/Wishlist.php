<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// CREATED WITH ❤︎ Reezky
// http://itsreezky.my.id

// Class for connect to table mobil

class Wishlist extends Authenticatable

{
    use HasFactory, Notifiable;

    protected $table = 'wishlist';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'foto_mobil',
        'owner',
        'kode_mobil',
        'merk',
        'model',
        'tarif',
    ];


}
