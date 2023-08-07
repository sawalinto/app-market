<?php

namespace App\Models;

use App\Models\StokBarang;
use App\Models\BarangOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BarangList extends Model
{
    use HasFactory;
    public function order(){
        return $this->hasMany(BarangOrder::class, 'nama_barang', 'nama_barang');
    }
    public function stokBarang(){
        return $this->hasMany(StokBarang::class, 'nama_barang', 'nama_barang');
    }
    public function produksiBarang(){
        return $this->hasMany(produksiBarang::class, 'nama_barang', 'nama_Barang');
    }
}
