<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $table = 'vendors';
    public function product()
    {
        return $this->hasMany('App\Models\Portfolio');
    }

    public function event()
    {
        return $this->hasMany('App\Models\Event');
    }
}
