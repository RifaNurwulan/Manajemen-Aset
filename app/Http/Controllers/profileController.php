<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $listasset = DB::table('list_asset')
        ->leftjoin('pelepasanstatus_asset', 'list_asset.id_pelepasanstatus', '=', 'pelepasanstatus_asset.id_pelepasanstatus')
        ->leftjoin('satuan', 'list_asset.id_satuan', '=', 'satuan.id_satuan')
        ->leftjoin('supplier', 'list_asset.id_supplier', '=', 'supplier.id_supplier')
        ->leftjoin('group_asset', 'list_asset.id_grup', '=', 'group_asset.id_grup')
        ->leftjoin('data_karyawan', 'list_asset.id_karyawan', '=', 'data_karyawan.id_karyawan')
        ->leftjoin('departement', 'list_asset.id_departement', '=', 'departement.id_departement')
        ->select('list_asset.*', 'satuan.nama_satuan', 'supplier.nama_supplier', 'group_asset.nama_grup_aset', 'data_karyawan.nama_karyawan', 'departement.nama_departement', 'pelepasanstatus_asset.desc_pelepasanstatus')
        ->where('data_karyawan.nama_karyawan', $user->nama_karyawan)
        ->get();
        return view('halaman.profile', compact('user', 'listasset'));
    }
    public function update(Request $request)
    {
        $user = auth()->user();
        
        $request->validate([
            'nama_karyawan' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        $user->nama_karyawan = $request->input('nama_karyawan');
        $user->email = $request->input('email');
    
        // Proses upload foto profil jika ada
        if ($request->hasFile('foto_profil')) {
            $image = $request->file('foto_profil');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $path = public_path('uploads/profil/'.$filename);
            $image->move(public_path('uploads/profil'), $filename);
            $user->foto_profil = $filename;
        }

        
        
        $user->save();
        
        return back()->with('success', 'Profil berhasil diupdate.');
    }
    

}
