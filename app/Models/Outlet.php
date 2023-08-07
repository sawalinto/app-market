<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    // public function outletList(){
    //     return $this->belongsTo(User::class, 'nama_Barang', 'nama_barang');
    // }

    public function ranking(){
        return $this->hasMany(Ranking::class, 'kode_outlet', 'kode_outlet');
    }
}
