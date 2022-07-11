<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanans';
    protected $fillable = ['id_user','id_event', 'total_pesanan', 'tanggal_pesan'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }
    public function pesanan()
    {
        return $this->hasMany('App\Models\Pesanan');
    }
}
