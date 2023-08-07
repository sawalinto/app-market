<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Outlet;
use App\Models\Karyawan;
use App\Models\BarangList;
use App\Models\StokBarang;
use App\Models\BarangOrder;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kategory;
use App\Models\Ranking;
use App\Models\Satuan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UpdateController extends Controller
{
    //
    public function updateKaryawan(Request $request)
    {
        $uidk = $request->uidKaryawan;
        $penempatan = $request->penempatan;
        $uid = Karyawan::where('uid_karyawan', $uidk)->first();
        $outlet = Outlet::where('nama_outlet', $penempatan)->first();
        $kode_outlet = $outlet->kode_outlet;
        // echo $uid->nama_karyawan;
        $namaKaryawan = $request->nama_karyawan;
        $domisili = $request->domisili;
        $posisi = $request->posisi;
        $t_masuk = $request->t_masuk;
        $t_lahir = $request->t_lahir;
        $no_hp = $request->no_hp;
        $poto = $request->poto;

        $uid->kode_outlet = $kode_outlet;
        $uid->nama_karyawan = $namaKaryawan;
        $uid->penempatan = $penempatan;
        $uid->domisili = $domisili;
        $uid->posisi = $posisi;
        $uid->t_masuk = $t_masuk;
        $uid->t_lahir = $t_lahir;
        $uid->no_hp = $no_hp;

        if ($request->hasFile('poto')) {
            $file = $request->file('poto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/photos/', $fileName); // Simpan di direktori 'public/photos'
            $uid->poto = $fileName; // Simpan nama file gambar di kolom 'photo' pada tabel
        }
        $uid->save();
        Session::flash('success', 'Karyawan berhasil diubah');
        return redirect('/');
    }
    public function updateOutlet(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $csrfToken = csrf_token();
        $id = $request->id;
        echo $id;
        $kode = 0;
        $data = Outlet::find($id);
        $data->nama_outlet = $request->nama_outlet;
        $data->alamat_outlet = $request->alamat_outlet;
        $data->no_hp = $request->hp_outlet;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/outlet/', $fileName); // Simpan di direktori 'public/photos'
            $data->gambar = $fileName; // Simpan nama file gambar di kolom 'photo' pada tabel
        }
        $data->map_outlet = $request->map_outlet;
        $data->save();
        Session::flash('success', 'Outlet berhasil diubah');
        return redirect()->back();
        // return redirect('/?dashboard=outletList&_' . $csrfToken);
    }
    public function updateBarangList(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $csrfToken = csrf_token();
        // $id = $request->id;
        $id = BarangList::find($request->id);
        $nama = $request->nama_barang;
        $kode = substr($nama, 0, 2) . substr($nama, -1);
        $id->kode_barang = $kode;
        $id->nama_barang = $nama;
        $id->kategori_barang = $request->kategori;
        $id->satuan = $request->satuan;
        $id->save();
        Session::flash('success', 'Barang berhasil diubah');
        return redirect('/?dashboard=barangList&_' . $csrfToken);
    }

    public function updatePending($uid)
    {
        date_default_timezone_set('Asia/Jakarta');
        $csrfToken = csrf_token();
        $action = $_GET['action'];
        $unik = Str::random(10);
        $tanggal = date('Y-m-d');
        $getOrder = $_GET['getOrder'];
        $uidOrder = BarangOrder::where('uid_order', $uid)->first();
        // dd($action);

        $namaOrder = $uidOrder->nama_barang;
        // echo $uidOrder->outlet_order;
        if ($action === 'Ditolak' || $action === 'Disetujui') {
            $uidOrder->status = $action;
            $uidOrder->save();
            Session::flash('success', 'Barang berhasil divalidasi');
            return redirect()->back();
        }
        $stokBarang = StokBarang::where('nama_barang', $uidOrder->nama_barang)->get();
        if (!$stokBarang->isEmpty()) {
            // dd($stokBarang);
            foreach ($stokBarang as $stok) {
                if ($action === 'Selesai') {
                    if ($stok->kode_outlet === $uidOrder->outlet_order) {
                        echo $stok->jumlah_stok += $uidOrder->jumlah_order;
                        $uidOrder->status = $action;
                        echo 'Selesai';
                        $uidOrder->save();
                        $stok->save();
                        Session::flash('success', 'Barang berhasil divalidasi');
                        return redirect()->back();
                    }
                }
            }
        }
        echo 's';
        $saveStok = new StokBarang();
        $saveStok->uid_stok = $unik;
        $saveStok->kode_outlet = $getOrder;
        $saveStok->nama_barang = $uidOrder->nama_barang;
        $saveStok->jumlah_stok = $uidOrder->jumlah_order;
        $uidOrder->status = $action;
        $uidOrder->save();
        $saveStok->save();
        Session::flash('success', 'Barang berhasil divalidasi');
        return redirect()->back();
    }

    public function updateKategory(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $uid = $request->uidKategory;
        $kategory = Kategory::where('uid_kategory', $uid)->first();
        $kategory->kategory = $request->namaKategory;
        $kategory->save();
        Session::flash('success', 'Kategory berhasil diupdate');
        return redirect()->back();
    }
    public function updateSatuan(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $uid = $request->uidSatuan;
        $satuan = Satuan::where('uid_satuan', $uid)->first();
        $satuan->satuan = $request->namaSatuan;
        $satuan->save();
        $request->session()->flash('success', 'Satuan Berhasil di Update');
        return redirect()->back();
    }
    public function updateUser(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $passwordLama =  $request->passwordOld;
        $passwordBaru = $request->passwordNew;
        $id = $request->id;

        $update = User::where('id', $id)->first();
        $update->name = $request->namaUser;
        $update->level = $request->levelUser;
        $update->email = $request->emailUser;
        $update->role = $request->roleUser;
        if ($request->hasFile('potoUser')) {
            $file = $request->file('potoUser');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/user/', $fileName); // Simpan di direktori 'public/photos'
            $update->gambar = $fileName; // Simpan nama file gambar di kolom 'photo' pada tabel
        }
        if (empty($passwordBaru)) {
            
            $update->save();
            $request->session()->flash('success', 'User Berhasil di Update');
            return redirect()->back();
        } else {
           
            $update->password = Hash::make($passwordBaru);
            $update->save();
            $request->session()->flash('success', 'User Berhasil di Update');
            return redirect()->back();
        }
    }

    public function updateLaporan(Request $request){
        date_default_timezone_set('Asia/Jakarta');
        $uid =  $request->uid;
        $laporan = Laporan::where('uid_laporan', $uid)->first();
        $laporan->judul = $request->judul;
        $laporan->keterangan=$request->keterangan;


        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/laporan/', $fileName); // Simpan di direktori 'public/photos'
            $laporan->image = $fileName; // Simpan nama file gambar di kolom 'photo' pada tabel
        }

        $laporan->save();
        Session::flash('success', 'Laporan berhasil diubah');
        return redirect()->back();
        
    }
    public function updateRanking(Request $request){
        date_default_timezone_set('Asia/Jakarta');
        $uid = $request->uid;
        $ranking = Ranking::where('uid_ranking', $uid)->first();
        $ranking->kebersihan = $request->kebersihan;
        $ranking->solidaritas = $request->solidaritas;
        $ranking->royalitas = $request->royalitas;
        $ranking->omset = $request->omset;
        $ranking->save();
        $request->session()->flash('success', 'Ranking Berhasil di Update');
        return redirect()->back();
    }
}
