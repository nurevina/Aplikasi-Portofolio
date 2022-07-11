<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    public function event()
    {
        return $this->hasMany('App\Models\Event');
    }

    public function product()
    {
        return $this->hasMany('App\Models\Portfolio','id_kategori');
    }
}
