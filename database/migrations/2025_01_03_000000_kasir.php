<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Tabel merk
        Schema::create('merk', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->timestamps();
        });

        // Tabel kategori
        Schema::create('kategori', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->timestamps();
        });

        // Tabel barang
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang')->unique();
            $table->string('nama_barang');
            $table->foreignId('id_merk')->nullable()->constrained('merk')->onDelete('set null');
            $table->foreignId('id_kategori')->nullable()->constrained('kategori')->onDelete('set null');
            $table->decimal('harga_beli', 10, 2);
            $table->decimal('harga_jual', 10, 2);
            $table->integer('stok');
            $table->timestamps();
        });

        // Tabel pelanggan
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kontak')->nullable();
            $table->string('alamat')->nullable();
            $table->timestamps();
        });

        // Tabel kasir
        Schema::create('kasir', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('password');
            $table->timestamps();
        });

        // Tabel transaksi
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelanggan')->nullable()->constrained('pelanggan')->onDelete('set null');
            $table->foreignId('id_kasir')->constrained('kasir')->onDelete('cascade');
            $table->dateTime('tanggal');
            $table->decimal('total_pembayaran', 10, 2);
            $table->timestamps();
        });

        // Tabel detail transaksi
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_transaksi')->constrained('transaksi')->onDelete('cascade');
            $table->foreignId('id_barang')->constrained('barang')->onDelete('cascade');
            $table->integer('kuantitas');
            $table->decimal('subtotal', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi');
        Schema::dropIfExists('transaksi');
        Schema::dropIfExists('kasir');
        Schema::dropIfExists('pelanggan');
        Schema::dropIfExists('barang');
        Schema::dropIfExists('kategori');
        Schema::dropIfExists('merk');
    }
};
