<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Outlet;
use App\Models\Satuan;
use App\Models\Karyawan;
use App\Models\Kategory;
use App\Models\BarangList;
use App\Models\StokBarang;
use App\Models\BarangOrder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\produksiBarang;
use App\Http\Controllers\Controller;
use App\Models\Posisi;
use App\Models\Ranking;
use Illuminate\Support\Facades\Session;

class CreateController extends Controller
{

    public function createOutlet(Request $request)
    {
        $outlet = new Outlet([
            'uid_outlet' => Str::random(10),
            'kode_outlet' => substr($request->nama_outlet, 0, 2) . substr($request->nama_outlet, -1),
            'nama_outlet' => $request->nama_outlet,
            'no_hp' => $request->no_hp,
            'alamat_outlet' => $request->alamat_outlet,
            'map_outlet' => $request->map_outlet,
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = $outlet['uid_outlet'] . time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/outlet/', $fileName); // Simpan di direktori 'public/photos'
            $outlet['gambar'] = $fileName; // Simpan nama file gambar di kolom 'photo' pada tabel
        }

        $ranking = new Ranking([
            'uid_ranking' => Str::random(10),
            'kode_outlet' => $outlet['kode_outlet'],
            'kebersihan' => 0,
            'solidaritas' => 0,
            'royalitas' => 0,
            'omset' => 0,
        ]);

        // Simpan Data Outlet
        $outlet->save();

        // Simpan Data Ranking
        $ranking->save();

        Session::flash('success', 'Outlet Berhasil Tambah');

        return redirect()->back();
    }

    public function createKaryawan(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $unik = Str::random(10);
        $penempatan = $request->input("penempatan");
        $outlet = Outlet::where('kode_outlet', $penempatan)->first();
        $karyawan = new Karyawan();
        $karyawan->uid_karyawan = $unik;
        $karyawan->kode_outlet = $penempatan;
        $karyawan->nama_karyawan = $request->input("nama_karyawan");
        $karyawan->penempatan = $outlet->nama_outlet;
        $karyawan->domisili = $request->input('domisili');
        $karyawan->posisi = $request->input('posisi');
        $karyawan->t_masuk = $request->input('t_masuk');
        $karyawan->t_lahir = $request->input('t_lahir');
        $karyawan->no_hp = $request->input('no_hp');
        if ($request->hasFile('poto')) {
            $file = $request->file('poto');
            $fileName = $unik . time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/photos/', $fileName); // Simpan di direktori 'public/photos'
            $karyawan->poto = $fileName; // Simpan nama file gambar di kolom 'photo' pada tabel
        }
        $karyawan->save();
        Session::flash('success', 'Karyawan Berhasil Tambah');
        return redirect('/');
    }
    //
    public function createBarangList(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $unik = Str::random(10);
        $string = $request->nama_barang;
        $slice = substr($string, 0, 2) . substr($string, -1);

        $result = new BarangList();
        $result->uid_barang = $unik;
        $result->kode_barang = $slice;
        $result->nama_barang = $string;
        $result->kategori_barang = $request->kategori;
        $result->satuan = $request->satuan;
        $result->save();
        Session::flash('success', 'Barang Berhasil Tambah');
        return redirect('/?dashboard=barangList&_' . $csrfToken);
    }

    public function createOrder(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $unik = Str::random(10);
        $kode = Str::random(4);
        $date = date("Ymd");
        $tanggal = date("Y-m-d");
        $namaBarang = $request->namaBarang;
        $user  = $request->user;

        $stok = StokBarang::all();
        $satu = BarangList::all();
        $samaBarang = BarangOrder::where('nama_barang', $namaBarang)->where('outlet_order', $user)->get();


        // echo $namaBarang;
        foreach ($satu as $satuans) {
            if ($namaBarang === $satuans->nama_barang) {
                $satuan = $satuans->satuan;
            }
        }

        $sisaStok = 0; // Inisialisasi nilai awal
        $found = false; // Flag untuk mengetahui apakah kondisi terpenuhi
        foreach ($stok as $sisa) {
            if ($user === $sisa->kode_outlet && $sisa->nama_barang === $namaBarang) {
                $sisaStok = $sisa->jumlah_stok;
                $found = true; // Set flag menjadi true jika kondisi terpenuhi
                break; // Keluar dari perulangan jika sudah ditemukan nilai yang diinginkan
            }
        }

        if ($samaBarang !== null) {
            foreach ($samaBarang as $barang) {
                $created_at = date('Y-m-d', strtotime($barang->created_at));
                if ($created_at === $tanggal) {
                    $barang->sisa_barang = $sisaStok;
                    $barang->jumlah_order = $request->jumlah;
                    $barang->save();
                    Session::flash('success', 'Order Berhasil Diubah');
                    return redirect()->back();
                } else {
                    echo 'gagal';
                }
            }
        }
        $result = new BarangOrder();
        $result->uid_order = $unik;
        $result->kode_order = $date . '#' . $kode;
        $result->outlet_order = $user;
        $result->nama_barang = $namaBarang;
        $result->sisa_barang = $sisaStok;
        $result->jumlah_order = $request->jumlah;
        $result->satuan = $satuan;
        $result->status = "Pending";
        $result->save();
        Session::flash('success', 'Order Berhasil Tambah');
        return redirect()->back();
    }

    public function createProduksi(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $unik = Str::random(10);
        $kode = Str::random(4);
        // $date = date("Y-m-d");



        $user = $request->user;
        $namaBarang = $request->namaBarang;
        $stokBarang = $request->stok;
        $jmlhProduksi = $request->jumlah;
        $keterangan = $request->keterangan;
        $hasil = $stokBarang - $jmlhProduksi;
        $date = date("Y-m-d");
        $upProduksi = produksiBarang::whereDate('created_at', $date)->where('nama_Barang', $namaBarang)->where('kode_outlet', $user)->first();

        $stokOutlet = StokBarang::where('kode_outlet', $user)->where('nama_barang', $namaBarang)->first();
        if ($upProduksi !== null) {
            $upProduksi->stok_barang = $stokBarang;
            $upProduksi->jumlah_produksi = $jmlhProduksi;
            $upProduksi->jumlah_stok = $hasil;
            $stokOutlet->jumlah_stok = $hasil;
            $stokOutlet->save();
            $upProduksi->save();
            Session::flash('success', 'Produksi Barang DiUpdate');
            return redirect()->back();
        } else {

            $produksi = new produksiBarang();
            $produksi->uid_produksi = $unik;
            $produksi->kode_outlet = $user;
            $produksi->nama_Barang = $namaBarang;
            $produksi->stok_barang = $stokBarang;
            $produksi->jumlah_produksi = $jmlhProduksi;
            $produksi->jumlah_stok = $hasil;
            $stokOutlet->jumlah_stok = $hasil;
            $produksi->keterangan = $keterangan;
            $stokOutlet->save();
            $produksi->save();
            Session::flash('success', 'Produksi Barang Berhasil');
            return redirect()->back();
        }
    }

    public function createKategory(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $unik = Str::random(10);
        $kategory = new Kategory();
        $kategory->uid_kategory = $unik;
        $kategory->kategory =  $request->namaKategory;
        $kategory->save();
        Session::flash('success', 'Simpan Kategory Berhasil');
        return redirect()->back();
    }
    public function createSatuan(Request $request){
        date_default_timezone_set('Asia/Jakarta');
        $unik = Str::random(10);
        $satuan = new Satuan();
        $satuan->uid_satuan = $unik;
        $satuan->satuan = $request->namaSatuan;
        $satuan->save();
        Session::flash('success', 'Simpan Satuan Berhasil');
        return redirect()->back();
    }

    public function createUser(Request $request){
        date_default_timezone_set('Asia/Jakarta');
        $unik = Str::random(10);
        // echo $request->roleUser;
        // echo  Hash::make($request->passwordUser);
        $user = new User();
        $user->name = $request->namaUser;
        $user->level = $request->levelUser;
        $user->email = $request->emailUser;
         $user->role = $request->roleUser;
         if ($request->hasFile('potoUser')) {
            $file = $request->file('potoUser');
            $fileName = $unik . time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/user/', $fileName); // Simpan di direktori 'public/photos'
            $user->gambar = $fileName; // Simpan nama file gambar di kolom 'photo' pada tabel
        }
        $user->password = Hash::make($request->passwordUser);
        $user->save();
        Session::flash('success', 'Simpan User Berhasil');
        return redirect()->back();

    }
    public function createPosisi(Request $request){
        date_default_timezone_set('Asia/Jakarta');
        $unik = Str::random(10);
        $posisi = new Posisi();
        $posisi->uid_posisi = $unik;
        $posisi->posisi = $request->namaPosisi;
        $posisi->save();
        Session::flash('success', 'Simpan Posisi Berhasil');
        return redirect()->back();
    }
    public function createLaporan(Request $request){
        date_default_timezone_set('Asia/Jakarta');
        $unik = Str::random(10);
        $user = $request->user;

        $laporan = new Laporan();
        $laporan->uid_laporan = $unik;
        $laporan->outlet = $user;
        $laporan->judul = $request->judul;
        $laporan->keterangan = $request->keterangan;
        // echo $request->hasFile('gambar');
        // echo $user;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = $unik . time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/laporan/', $fileName); // Simpan di direktori 'public/photos'
            $laporan->image = $fileName; // Simpan nama file gambar di kolom 'photo' pada tabel
        }
        $laporan->save();
        Session::flash('success', 'Simpan laporan Berhasil');
        return redirect()->back();

    }
}
