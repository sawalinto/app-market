<?php

namespace App\Http\Controllers;

use App\Models\BarangList;
use App\Models\BarangOrder;
use App\Models\Kategory;
use App\Models\Laporan;
use App\Models\Outlet;
use App\Models\Posisi;
use App\Models\produksiBarang;
use App\Models\Satuan;
use App\Models\StokBarang;
use Closure;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    

    public function index()
    {
        $csrfToken = csrf_token();
        $title = "Login App";
        if(Auth::check()){
            if(Auth::user()->level === 'ALL'){
                return redirect('/');
            }else{
                return redirect('/outlet?outlet='. Auth::user()->level .'&'. $csrfToken);
            }
        }
        else{
            return view('admin.auth.login',[
                'title' =>$title
            ]);
        }
    }

    public function superAdmin(){
        error_reporting(0);
        $title = "Super Admin";
        $hal = $_GET['hal'];
        $outlet = Outlet::all();
        $users = User::all();
        $kategory = Kategory::all();
        $satuan = Satuan::all();
        $posisi = Posisi::all();
        $card = ['User', 'Outlet', 'Kategori & Satuan', ];
        $icon = ['fa-user', 'fa-store', 'fa-th-large'];
        $url = ['/superadmin', '/superadmin?hal=outlet', '/superadmin?hal=kategori'];
        
    return view('admin.page.superadmin.index',
    [
        'card'=>$card,
        'icon'=>$icon,
        'outlet'=>$outlet,
        'users'=> $users,
        'url' => $url,
        'hal' => $hal,
        'kategory'=>$kategory,
        'satuan'=>$satuan,
        'posisi' => $posisi,
        'title' => $title
        
    ]);
    }
    public function register()
    {
        return view('admin.auth.register');
    }
    public function login(Request $request)
    {
        $csrfToken = csrf_token();
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            if(Auth::user()->level === 'ALL' || Auth::user()->level === 'ADMIN'){
                return redirect('/');
            }else{
                return redirect('/outlet?outlet='. Auth::user()->level .'&'. $csrfToken);
            }
        } else {
            return redirect()->back()->withInput()->withErrors(['msg' => 'Email atau password salah']);
        }
    }
    


    public function orderBarang(){
        date_default_timezone_set('Asia/Jakarta');
        
        $csrfToken = csrf_token();
        $date=$_GET['date'];
        $getOrder = $_GET['getOrder'];
        $title = "Order Barang ".$getOrder;
        $barang = BarangList::all();
        $order = BarangOrder::where('outlet_order', $getOrder)->whereDate('created_at', $date)->get();
        $outlet = Outlet::where('kode_outlet', $getOrder)->first();
        $i = 1;
        return view('admin.page.order.index', [
            'orderList' => $order,
            'barangList' => $barang,
            'date'=>$date,
            'getOrder'=>$getOrder,
            'i'=>$i,
            'outles' => $outlet,
            'title' => $title
        ]);
    }

    public function produksiBarang(){
        date_default_timezone_set('Asia/Jakarta');
        $csrfToken = csrf_token();
        $date = $_GET['date'];
        $outlet = $_GET['outlet'];
        $title = "Produksi Barang ";
        $barang = BarangList::all();
        $stok =  StokBarang::where('kode_outlet', $outlet)->get();
        $produksiBarang = produksiBarang::whereDate('created_at', $date)->where('kode_outlet', $outlet)->get();
        // dd($produksiBarang->barangList);
        return view('admin.page.outlet.list.produksiBarang',[
            'stok' => $stok,
            'date' => $date,
            'produksi' => $produksiBarang,
            'barangList' => $barang,
            'outlet' => $outlet,
            'crsf' => $csrfToken,
            'title' => $title
        ]);
    }

    public function laporan(){
        date_default_timezone_set('Asia/Jakarta');
       
        $csrfToken = csrf_token();
        $outlet = $_GET['outlet'];
        $date = $_GET['date'];
        $title = "Laporan Outlet || ".$date;
        $namaOutlet = Outlet::where('kode_outlet', $outlet)->first();
        $laporan = Laporan::where('outlet', $outlet)->whereDate('created_at', $date)->get();
        return view('admin.page.laporan.index',[
            'crsf' => $csrfToken,
            'title' => $title,
            'outlet'=> $outlet,
            'date'=> $date,
            'nama'=> $namaOutlet,
            'laporan'=>$laporan
        ]);
    }



    public function profile()
    {
        $title = "Profile";
        return view('admin.page.profile',[
            'title'=> $title
        ]);
    }
}
