<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';

    protected $fillable = [
        'nama_barang',
        'harga_barang',
        'deskripsi',
        'stok',
        'id_kategori',
    ];

    public $timestamps = true;

    // belongsTo: satu produk hanya punya satu kategori
    public function kategori()
    {
        return $this->belongsTo(
            Kategori::class,
            'id_kategori',
            'id_kategori'
        );
    }

    // satu produk bisa ada di banyak pesanan
    public function pesanan()
    {
        return $this->belongsToMany(
            Pesanan::class,
            'detail_pesanan',
            'id_produk',
            'id_pesanan'
        )->withPivot('jumlah');
    }
}
