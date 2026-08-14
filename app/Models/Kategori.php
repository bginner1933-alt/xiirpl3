<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table      = 'kategori';       // nama tabel di database
    protected $primaryKey = 'id_kategori';     // primary key BUKAN 'id'
    public $timestamps    = false;             // tabel ini tidak punya created_at/updated_at

    protected $fillable = ['nama_kategori'];

    // Satu kategori bisa punya banyak produk
    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_kategori');
    }
}
