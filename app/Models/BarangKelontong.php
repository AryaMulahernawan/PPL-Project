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
        'tanggal_masuk',
        'tersedia',
    ];

    // Tipe data dari kolom yang ada
    protected $casts = [
        'stok' => 'integer',
        'tanggal_masuk' => 'date',
        'tersedia' => 'boolean',
    ];

    // Relasi Many-to-Many dengan model Transaksi
    public function transaksis()
    {
        return $this->belongsToMany(Transaksi::class, 'barang_kelontong_transaksi', 'barang_kelontong_id', 'transaksi_id');
    }
}