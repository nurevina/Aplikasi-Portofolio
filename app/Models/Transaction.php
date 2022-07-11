<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = ['id_pesanan','tanggal_transaksi', 'keterangan_transaksi'];

    public function pesanan()
    {
        return $this->belongsTo('App\Models\Pesanan');
    }
}
