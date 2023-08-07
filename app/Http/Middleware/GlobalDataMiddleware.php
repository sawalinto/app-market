<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Outlet;
use App\Models\Posisi;
use App\Models\Satuan;
use App\Models\Kategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GlobalDataMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $outlet = Outlet::all();
        $user = Auth::user();
        // dd($user);
        // $namaStore = Outlet::where('kode_outlet', $user->level)->first();
        // dd($namaStore);
        $storage = Storage::url('storage/app/public/poto.jpg');
        $csrfToken = csrf_token();
        $kategori = Kategory::all();
        $satuan = Satuan::all();
        $satuan = Satuan::all();
        $posisi = Posisi::all();
        view()->share([
            'outletmid'=> $outlet,
            'user'=> $user,
            'storage' => $storage,
            'kategori' =>$kategori,
            'satuan' =>$satuan,
            'posisi' => $posisi,
           'csrfToken' => $csrfToken,
        //    'namaStore'=>$namaStore
        ]);
        return $next($request);
    }
}
