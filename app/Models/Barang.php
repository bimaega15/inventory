<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $guarded = [];
    public $timestamps = true;

    public function scopeDataTable($query)
    {
        return $query->select('*');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function satuan()
    {
        return $this->belongsTo(Satuan::class);
    }

    public function serialBarang()
    {
        return $this->hasMany(SerialBarang::class);
    }

    public function penjualanProduct()
    {
        return $this->hasMany(PenjualanProduct::class);
    }

    public function pembelianProduct()
    {
        return $this->hasMany(PembelianProduct::class);
    }

    public function orderBarang()
    {
        return $this->hasMany(OrderBarang::class);
    }

    public function getReportBarang()
    {
        return Barang::dataTable()->with('penjualanProduct', 'pembelianProduct', 'orderBarang', 'kategori', 'satuan');
    }
}
