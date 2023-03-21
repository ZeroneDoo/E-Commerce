<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }
}
