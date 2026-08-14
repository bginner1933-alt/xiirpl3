<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kategori;
use App\Models\Pelanggan;
use App\Models\Produk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // =========================
        // USER
        // =========================
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        // =========================
        // KATEGORI
        // =========================
        $kategori1 = Kategori::create([
            'nama_kategori' => 'Makanan',
        ]);

        $kategori2 = Kategori::create([
            'nama_kategori' => 'Minuman',
        ]);

        $kategori3 = Kategori::create([
            'nama_kategori' => 'Snack',
        ]);

        // =========================
        // PELANGGAN
        // =========================
        Pelanggan::create([
            'nama_pelanggan' => 'Budi',
            'alamat' => 'Bandung',
        ]);

        Pelanggan::create([
            'nama_pelanggan' => 'Siti',
            'alamat' => 'Jakarta',
        ]);

        Pelanggan::create([
            'nama_pelanggan' => 'Andi',
            'alamat' => 'Bogor',
        ]);

        // =========================
        // PRODUK
        // =========================
        Produk::create([
            'nama_barang' => 'Nasi Goreng',
            'harga_barang' => 15000,
            'deskripsi' => 'Nasi goreng spesial',
            'stok' => 20,
            'id_kategori' => $kategori1->id_kategori,
        ]);

        Produk::create([
            'nama_barang' => 'Mie Goreng',
            'harga_barang' => 12000,
            'deskripsi' => 'Mie goreng spesial',
            'stok' => 25,
            'id_kategori' => $kategori1->id_kategori,
        ]);

        Produk::create([
            'nama_barang' => 'Es Teh',
            'harga_barang' => 5000,
            'deskripsi' => 'Es teh manis',
            'stok' => 50,
            'id_kategori' => $kategori2->id_kategori,
        ]);

        Produk::create([
            'nama_barang' => 'Jus Jeruk',
            'harga_barang' => 10000,
            'deskripsi' => 'Jus jeruk segar',
            'stok' => 30,
            'id_kategori' => $kategori2->id_kategori,
        ]);

        Produk::create([
            'nama_barang' => 'Keripik',
            'harga_barang' => 8000,
            'deskripsi' => 'Keripik renyah',
            'stok' => 40,
            'id_kategori' => $kategori3->id_kategori,
        ]);
    }
}
