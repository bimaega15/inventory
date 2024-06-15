<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelian';
    protected $guarded = [];
    public $timestamps = true;

    public function scopeDataTable($query)
    {
        return $query->select('*');
    }

    public function invoicePembelian($pembelian_id)
    {
        $data = Pembelian::with('supplier', 'users', 'users.profile', 'pembelianProduct', 'pembelianProduct.barang', 'pembelianPembayaran', 'pembelianPembayaran.kategoriPembayaran', 'pembelianPembayaran.subPembayaran', 'pembelianPembayaran.users', 'pembelianPembayaran.users.profile',  'pembelianCicilan', 'pembelianCicilan.kategoriPembayaran', 'pembelianCicilan.subPembayaran', 'pembelianCicilan.users', 'pembelianCicilan.users.profile')->find($pembelian_id);
        return $data;
    }

    public function invoiceLunas()
    {
        $data = Pembelian::with('supplier', 'users', 'users.profile', 'pembelianProduct', 'pembelianProduct.barang', 'pembelianPembayaran', 'pembelianPembayaran.kategoriPembayaran', 'pembelianPembayaran.subPembayaran', 'pembelianPembayaran.users', 'pembelianPembayaran.users.profile',  'pembelianCicilan', 'pembelianCicilan.kategoriPembayaran', 'pembelianCicilan.subPembayaran', 'pembelianCicilan.users', 'pembelianCicilan.users.profile')
            ->where('tipe_pembelian', 'cash')
            ->whereHas('pembelianCicilan');
        return $data;
    }

    public function getReportPembelian()
    {
        $data = Pembelian::with('supplier', 'users', 'users.profile', 'pembelianProduct', 'pembelianProduct.barang', 'pembelianPembayaran', 'pembelianPembayaran.kategoriPembayaran', 'pembelianPembayaran.subPembayaran', 'pembelianPembayaran.users', 'pembelianPembayaran.users.profile',  'pembelianCicilan', 'pembelianCicilan.kategoriPembayaran', 'pembelianCicilan.subPembayaran', 'pembelianCicilan.users', 'pembelianCicilan.users.profile');
        return $data;
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
    public function pembelianCicilan()
    {
        return $this->hasMany(PembelianCicilan::class);
    }

    public function pembelianPembayaran()
    {
        return $this->hasMany(PembelianPembayaran::class);
    }

    public function pembelianProduct()
    {
        return $this->hasMany(PembelianProduct::class);
    }
}
