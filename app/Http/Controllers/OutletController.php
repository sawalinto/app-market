<?php

namespace App\Http\Controllers;

use App\Models\BarangOrder;
use App\Models\Karyawan;
use App\Models\Laporan;
use App\Models\Outlet;
use App\Models\produksiBarang;
use App\Models\Ranking;
use App\Models\StokBarang;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        error_reporting(0);
        $outlet = $_GET['outlet'];
        $stok = $_GET['hal'];
        // dd ($stok);
$title = "Outlet Fritto Chicken";
        $outs=[]; 
        $map=[]; 
        $karyawan=Karyawan::where('kode_outlet', $outlet)->get();
        $outlets = Outlet::where('kode_outlet', $outlet)->get();
        $ranking = Ranking::where('kode_outlet', $outlet)->first();
        // dd($ranking);

        $stokbarang = StokBarang::where('kode_outlet', $outlet)->get();
        $orderBarang = BarangOrder::where('outlet_order', $outlet)->where('status', 'Pending')->get();
        $produksi = produksiBarang::where('kode_outlet', $outlet)->whereDate('created_at', date('Y-m-d'))->get();
        $laporan = Laporan::where('outlet', $outlet)->get();
        foreach ($outlets as $out){
            $outs[] = $out->nama_outlet;
            $map[] = $out->map_outlet;
        }
        $outadmin = implode(', ', $outs);
        $maps = implode(', ', $map);
        return view('admin.page.outlet.index',[
            'karyawan' => $karyawan,
            'outadmin' => $outadmin,
            'map' => $maps,
            'stokBarang' => $stokbarang,
            'outlet' => $outlet,
            'stok' => $stok,
            'i' => $i=1,
            'title' => $title,
            'orderBarang'=> $orderBarang,
            'produksi'=> $produksi,
            'laporan' => $laporan,
            'ranking'=>$ranking

        ]);
    }
}
