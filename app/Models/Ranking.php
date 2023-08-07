<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    use HasFactory;
    public function outList(){
        return $this->belongsTo(Outlet::class, 'kode_outlet', 'kode_outlet');
    }
}
