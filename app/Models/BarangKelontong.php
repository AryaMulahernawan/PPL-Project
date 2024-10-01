<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKelontong extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'barang_kelontong';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama_barang',
        'stok',
        'kategori',
        'tanggal_kadaluarsa',
        'tersedia',
    ];

    // Tipe data dari kolom yang ada
    protected $casts = [
        'stok' => 'integer',
        'tanggal_kadaluarsa' => 'date',
        'tersedia' => 'boolean',
    ];
}