<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'barang_id', // Kolom ini adalah foreign key yang mengacu pada tabel barang_kelontong
        'jumlah_transaksi',
        'tanggal_transaksi',
    ];

    // Relasi Many-to-One dengan model BarangKelontong
    public function barangKelontong()
    {
        return $this->belongsTo(BarangKelontong::class, 'barang_id');
    }
    
    // Relasi Many-to-Many dengan model BarangKelontong
    public function barangKelontongs()
    {
        return $this->belongsToMany(BarangKelontong::class, 'barang_kelontong_transaksi', 'transaksi_id', 'barang_kelontong_id');
    }
}