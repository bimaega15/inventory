<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SerialBarang extends Model
{
    use HasFactory;
    protected $table = 'serial_barang';
    protected $guarded = [];
    public $timestamps = true;

    public function scopeDataTable($query)
    {
        return $query->select('*');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
