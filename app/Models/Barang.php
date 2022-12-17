<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;

    public function Kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function Cart(){
        return $this->hasOne(Cart::class, 'barang_id');
    }
}
