<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pengguna extends Authenticatable
{
    use HasFactory;

    protected $guarded = [];

    public function barang()
    {
        return $this->belongsToMany(Keranjang::class, Barang::class);
    }
}
