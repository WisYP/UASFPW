<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barangs";

    protected $fillable = [
        'no_barang', 
        'namabarang', 
        'varian', 
        'tanggal_kadaluarsa',
        'tanggal_produksi', 
        'hargabeli',
    ];
}