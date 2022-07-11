<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $fillable = ['id_kategori','vendor_id', 'jenis_event', 'harga'];

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori');
    }

    public function vendor()
    {
        return $this->belongsTo('App\Models\Vendor');
    }

    public function pesanan()
    {
        return $this->hasMany('App\Models\Pesanan');
    }
}
