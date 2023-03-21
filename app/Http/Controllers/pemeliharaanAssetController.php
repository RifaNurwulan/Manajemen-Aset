<?php

namespace App\Http\Controllers;

use App\Models\pemeliharaanAsset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pemeliharaanAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $pemeliharaan_asset = DB::table('pemeliharaan_asset')->get();
    //     //dd($departement);
    //     return view('halaman.listAssset', compact('pemeliharaan_asset'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman.listAsset');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {   
    //     $requestData = $request->all();
    //     $fileName = time().$request->file('foto_asetRusak')->getClientOriginalName();
    //     $path = $request->file('foto_asetRusak')->storeAs('images', $fileName, 'public');
    //     $requestData["foto_asetRusak"] = '/storage/'.$path;
    //     pemeliharaan_asset::create([
    //         'id_list_aset' => $request->id_list_aset,
    //         'kode_aset' => $request->kode_asetKondisi,
    //         'nama_aset' => $request->nama_asetKondisi,
    //         'tanggal_kerusakan' => $request->tanggal_kerusakan,
    //         'keterangan' => $request->keterangan,
    //         'foto_asetRusak' => $request->foto_asetRusak,
    //         'tindakan' => $request->tindakan,
    //         'harga_perbaikan' => $request->harga_perbaikan,
    //     ]);
    //         $request->validate([
    //         'id_list_aset' => 'required',
    //         'kode_aset' => 'required',
    //         'nama_aset' => 'required',
    //         'tanggal_kerusakan' => 'required',
    //         'keterangan' => 'required',
    //         'foto_asetRusak' => 'required',
    //         'tindakan' => 'required',
    //         'harga_perbaikan' => 'required',
    //     ]);
    //     return redirect('kondisi')->with('success', 'Data Berhasil Disimpan!');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $jabatan = jabatan::findorfail($request->id_jabatan);
        $jabatan->update($request->all());
        return redirect('jabatan')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // $jabatan = jabatan::findorfail($id_jabatan);
        // $jabatan->delete();
        $jabatan = jabatan::findorfail($request->id_jabatan);
        $jabatan->update($request->all());
        return redirect('jabatan')->with('status', 'Data Berhasil Diupdate!');
    }
}
