<?php

namespace App\Http\Controllers;

use App\Models\BarangKelontong;
use Illuminate\Http\Request;

class BarangKelontongController extends Controller
{
    // Method untuk menampilkan semua data barang kelontong
    public function index()
    {
        $barang = BarangKelontong::all();
        return view('barang_kelontong.index', compact('barang'));
    }
    public function create()
{
    return view('barang_kelontong.create');

}
public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'nama_barang' => 'required|string|max:255',
        'stok' => 'required|integer',
        'kategori' => 'required|in:makanan,minuman,kebutuhan_rumah_tangga,lainnya',
        'tanggal_kadaluarsa' => 'required|date',
        'tersedia' => 'required|boolean',
    ]);

    // Simpan data ke database
    BarangKelontong::create([
        'nama_barang' => $request->nama_barang,
        'stok' => $request->stok,
        'kategori' => $request->kategori,
        'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
        'tersedia' => $request->tersedia,
    ]);

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('barang_kelontong.index')->with('success', 'Barang berhasil ditambahkan!');
}
}