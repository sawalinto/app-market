<?php

namespace App\Models;

use App\Models\BarangList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BarangOrder extends Model
{
    use HasFactory;
    public function barangList(){
        return $this->belongsTo(BarangList::class, 'nama_barang', 'nama_barang');
    }
}
