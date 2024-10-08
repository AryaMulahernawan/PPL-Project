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

    // Method untuk menampilkan form tambah barang
    public function create()
    {
        return view('barang_kelontong.create');
    }

    // Method untuk menyimpan data barang kelontong
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'nama_barang' => 'required|string|max:255',
        'stok' => 'required|integer',
        'kategori' => 'required|in:makanan,minuman,kebutuhan_rumah_tangga,lainnya',
        'tanggal_kadaluarsa' => 'required|date',
        'tersedia' => 'required|boolean', // Memastikan validasi untuk tersedia
    ]);

    // Simpan data ke database
    BarangKelontong::create([
        'nama_barang' => $request->nama_barang,
        'stok' => $request->stok,
        'kategori' => $request->kategori,
        'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
        'tersedia' => $request->tersedia, // Pastikan ini benar
    ]);

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('barang_kelontong.index')->with('success', 'Barang berhasil ditambahkan!');
}


    // Method untuk menampilkan form edit barang
    public function edit($id)
{
    $barang = BarangKelontong::findOrFail($id);
    return view('barang_kelontong.edit', compact('barang'));
}


    // Method untuk memperbarui data barang kelontong
    public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'nama_barang' => 'required|string|max:255',
        'stok' => 'required|integer',
        'kategori' => 'required|in:makanan,minuman,kebutuhan_rumah_tangga,lainnya',
        'tanggal_kadaluarsa' => 'required|date',
        'tersedia' => 'required|boolean',
    ]);

    // Cari barang dan update
    $barang = BarangKelontong::findOrFail($id);
    $barang->update([
        'nama_barang' => $request->nama_barang,
        'stok' => $request->stok,
        'kategori' => $request->kategori,
        'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
        'tersedia' => $request->tersedia,
    ]);

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('barang_kelontong.index')->with('success', 'Barang berhasil diperbarui!');
}


    // Method untuk menghapus barang
    public function destroy($id)
    {
        $barang = BarangKelontong::findOrFail($id);
        $barang->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('barang_kelontong.index')->with('success', 'Barang berhasil dihapus!');
    }
}