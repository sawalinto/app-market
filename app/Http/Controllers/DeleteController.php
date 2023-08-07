<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use App\Models\Karyawan;
use App\Models\Posisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BarangList;
use App\Models\BarangOrder;
use App\Models\Kategory;
use App\Models\Laporan;
use App\Models\Ranking;
use App\Models\Satuan;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class DeleteController extends Controller
{
    //
    public function hapusKaryawan($uidKaryawan)
    {
        $uid_karyawan = Karyawan::where('uid_karyawan', $uidKaryawan)->first();
        $uid_karyawan->delete();
        Session::flash('success', 'Karyawan berhasil dihapus');
        return redirect('/');
    }
    public function hapusOutlet($uidOutlet)
    {
        $csrfToken = csrf_token();
        $uid_outlet = Outlet::where('uid_outlet', $uidOutlet)->first();
        $ranking = Ranking::where('kode_outlet', $uid_outlet->kode_outlet)->first();
        $uid_outlet->delete();
        $ranking->delete();
        Session::flash('success', 'Outlet berhasil dihapus');
        return redirect()->back();
        // return redirect('/?dashboard=outletList&' . $csrfToken);
    }
    public function hapusBarangList($uidBarang)
    {
        $csrfToken = csrf_token();
        $uid_barang = BarangList::where('uid_barang', $uidBarang)->first();
        $uid_barang->delete();
        Session::flash('success', 'Barang berhasil dihapus');
        return redirect()->back();
        // return redirect('/?dashboard=barangList&' . $csrfToken);
    }

    public function hapusOrder($uidOrder)
    {
        $csrfToken = csrf_token();
        $uidDelete = BarangOrder::where('uid_order', $uidOrder)->first();
        $uidDelete->delete();
        Session::flash('success', 'Order berhasil dihapus');
        return redirect()->back();
    }
    public function hapusKategory($uidKategory)
    {
        $delete = Kategory::where('uid_kategory', $uidKategory)->first();
        $delete->delete();
        Session::flash('success', 'Kategory berhasil dihapus');
        return redirect()->back();
    }
    public function hapusSatuan(Request $request, $uidSatuan)
    {
        $delete = Satuan::where('uid_satuan', $uidSatuan)->first();
        $delete->delete();
        $request->session()->flash('success', 'Satuan berhasil dihapus');
        return redirect()->back();
    }
    public function hapusUser($emailUser)
    {
        $delete = User::where('created_at', $emailUser)->first();
        $delete->delete();
        Session::flash('success', 'User berhasil dihapus');
        return redirect()->back();
    }
    public function hapusPosisi($uidPosisi)
    {
        $delete = Posisi::where('uid_posisi', $uidPosisi)->first();
        $delete->delete();
        Session::flash('success', 'Posisi berhasil dihapus');
        return redirect()->back();
    }
    public function hapusLaporan($uidLaporan){
        $delete = Laporan::where('uid_laporan', $uidLaporan)->first();
        $delete->delete();
        Session::flash('success', 'Laporan berhasil dihapus');
        return redirect()->back();
    }
}
