<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Tabel merk (tetap sama)
        Schema::create('merk', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->timestamps();
        });

        // Tabel kategori (tetap sama)
        Schema::create('kategori', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->timestamps();
        });

        // Tabel barang (diperbarui)
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang')->unique();
            $table->string('nama_barang');
            $table->foreignId('id_merk')->nullable()->constrained('merk')->onDelete('set null');
            $table->foreignId('id_kategori')->nullable()->constrained('kategori')->onDelete('set null');
            $table->decimal('harga_beli', 10, 2);
            $table->decimal('harga_jual', 10, 2);
            $table->integer('stok');
            $table->integer('stok_minimum')->default(0);
            $table->integer('stok_maksimum')->default(0);
            $table->enum('status', ['aktif', 'non-aktif'])->default('aktif');
            $table->timestamps();
        });

        // Tabel pelanggan (tetap sama)
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kontak')->nullable();
            $table->string('alamat')->nullable();
            $table->timestamps();
        });

        // Tabel kasir (diperbarui)
        Schema::create('kasir', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->enum('status', ['aktif', 'non-aktif'])->default('aktif');
            $table->timestamps();
        });

        // Tabel transaksi (diperbarui)
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelanggan')->nullable()->constrained('pelanggan')->onDelete('set null');
            $table->foreignId('id_kasir')->constrained('kasir')->onDelete('cascade');
            $table->dateTime('tanggal');
            $table->decimal('total_pembayaran', 10, 2);
            $table->enum('metode_pembayaran', ['tunai', 'transfer', 'kredit'])->default('tunai');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });

        // Tabel detail transaksi (tetap sama)
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_transaksi')->constrained('transaksi')->onDelete('cascade');
            $table->foreignId('id_barang')->constrained('barang')->onDelete('cascade');
            $table->integer('kuantitas');
            $table->decimal('subtotal', 10, 2);
            $table->timestamps();
        });

        Schema::create('master_barang', function (Blueprint $table) {
            $table->id('id_master');
            $table->string('kode_master')->unique();
            $table->string('nama_master');
            $table->text('deskripsi')->nullable();

            // Foreign key untuk kategori
            $table->unsignedBigInteger('id_kategori');
            $table->foreign('id_kategori')
                ->references('id')
                ->on('kategori')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            // Foreign key untuk merk
            $table->unsignedBigInteger('id_merk');
            $table->foreign('id_merk')
                ->references('id')
                ->on('merk')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            // Status dengan default value
            $table->string('status')->default('aktif');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi');
        Schema::dropIfExists('transaksi');
        Schema::dropIfExists('kasir');
        Schema::dropIfExists('pelanggan');
        Schema::dropIfExists('barang');
        Schema::dropIfExists('kategori');
        Schema::dropIfExists('merk');
        Schema::dropIfExists('master_barang');
    }
};
