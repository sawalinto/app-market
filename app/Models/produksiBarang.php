<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produksiBarang extends Model
{
    use HasFactory;
    public function barangList(){
        return $this->belongsTo(BarangList::class, 'nama_Barang', 'nama_barang');
    }
}
