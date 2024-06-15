<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianCicilan extends Model
{
    use HasFactory;
    protected $table = 'pembelian_cicilan';
    protected $guarded = [];
    public $timestamps = true;

    public function scopeDataTable($query)
    {
        return $query->select('*');
    }

    public function kategoriPembayaran()
    {
        return $this->belongsTo(KategoriPembayaran::class);
    }

    public function subPembayaran()
    {
        return $this->belongsTo(SubPembayaran::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function pembelian()
    {
        return $this->belongsTo(Pembelian::class);
    }

    public function getData($pembelian_id)
    {
        $data = PembelianCicilan::with('kategoriPembayaran', 'subPembayaran', 'users', 'users.profile')
            ->find($pembelian_id);
        return $data;
    }

    public function dataTable($pembelian_id)
    {
        $data = PembelianCicilan::with('kategoriPembayaran', 'subPembayaran', 'users', 'users.profile')
            ->where('pembelian_id', $pembelian_id);
        return $data;
    }
}
