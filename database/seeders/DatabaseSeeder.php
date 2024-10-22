<?php 

namespace Database\Seeders; 

use App\Models\Transaksi; 
use Illuminate\Database\Seeder; 
use App\Models\BarangKelontong; 
use Carbon\Carbon;

class DatabaseSeeder extends Seeder 
{ 
    /** 
     * Seed the application's database. 
     */ 
    public function run(): void 
    { 
        // Membuat barang pertama  
        $barang1 = BarangKelontong::create([ 
            'nama_barang' => 'Permen', 
            'stok' => 10, 
            'kategori' => 'makanan', 
            'tanggal_masuk' => Carbon::now(), 
            'tersedia' => true 
        ]); 
        
        // Membuat barang kedua  
        $barang2 = BarangKelontong::create([ 
            'nama_barang' => 'Indomilk', 
            'stok' => 15, 
            'kategori' => 'minuman', 
            'tanggal_masuk' => Carbon::now(), 
            'tersedia' => true 
        ]);
        
        // Membuat transaksi pertama
        $transaksi1 = Transaksi::create([ 
            'barang_id' => $barang1->id, 
            'jumlah_transaksi' => 1, 
            'tanggal_transaksi' => Carbon::now()
        ]);
        
        // Membuat transaksi kedua
        $transaksi2 = Transaksi::create([ 
            'barang_id' => $barang2->id, 
            'jumlah_transaksi' => 1, 
            'tanggal_transaksi' => Carbon::now()
        ]);
        
        // Mengaitkan barang dengan transaksi menggunakan tabel pivot
        $barang1->transaksis()->attach($transaksi1->id);
        $barang2->transaksis()->attach($transaksi1->id);
        
        $barang1->transaksis()->attach($transaksi2->id);
        $barang2->transaksis()->attach($transaksi2->id);
    }
}