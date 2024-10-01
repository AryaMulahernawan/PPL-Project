<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangKelontongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_kelontong', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang'); // Tipe data string
            $table->integer('stok'); // Tipe data number (integer)
            $table->enum('kategori', ['makanan', 'minuman', 'kebutuhan_rumah_tangga', 'lainnya']); // Tipe data enum
            $table->date('tanggal_kadaluarsa'); // Tipe data date
            $table->boolean('tersedia'); // Tipe data boolean
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang_kelontong');
    }
}