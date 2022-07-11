<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table = 'portfolios';
    protected $fillable = ['vendor_id','id_kategori','image_product', 'nama_event'];


    public function vendor()
    {
        return $this->belongsTo('App\Models\Vendor');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori','id_kategori');
    }
}
