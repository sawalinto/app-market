<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Outlet;
use App\Models\Karyawan;
use App\Models\Satuan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BarangList;
use App\Models\Kategory;
use App\Models\Ranking;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    //
    public function index()
    {
        error_reporting(0);
        $title = "Dashboard";
        $csrfToken = csrf_token();
        $random = Str::random(7);
        $i = 1;
        $cabang = $_GET['dashboard'];
        $outlet = Outlet::all();
        $ranking = Ranking::all();
        $karyawan = Karyawan::all();
        $barang = BarangList::all();
        $laporan = Laporan::all();
        
        if (Auth::user()->level === 'ALL') {
            return view('admin.page.dashboard.dashboard', [
                'karyawan' => $karyawan,
                'outlet' => $outlet,
                'barang' => $barang,
                'laporan' => $laporan,
                'random'=> $random,
                'ranking' => $ranking,
                'i' => $i,
                'dashboard' => $cabang,
                'title' => $title
            ]);
        } else {
            return redirect('/outlet?outlet=' . Auth::user()->level . '&_' . $csrfToken);
        }
    }
    
}
