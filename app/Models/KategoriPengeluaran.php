<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPengeluaran extends Model
{
    use HasFactory;
    protected $table = 'kategori_pengeluaran';
    protected $guarded = [];
    public $timestamps = true;

    public function scopeDataTable($query)
    {
        return $query->select('*');
    }

    public function transaksiPengeluaran()
    {
        return $this->hasMany(TransaksiPengeluaran::class);
    }
}
