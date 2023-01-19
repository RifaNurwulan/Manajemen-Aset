<?php

namespace App\Http\Controllers;

use App\Models\groupAsset;
use Illuminate\Http\Request;

class GroupAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupasset = groupAsset::paginate(10);
        return view('halaman.groupAsset',compact('groupasset'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman.groupAsset');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_grup' => 'required',
            'nama_grup_aset' => 'required',
            'tipe_depresiasi' => 'required',
            'tahun' => 'required',
            'depresiasi' => 'required',
        ]);

        // dd($request->all());

        groupAsset::create([
            'kode_grup' => $request->kode_grup,
            'nama_grup_aset' => $request->nama_grup_aset,
            'tipe_depresiasi' => $request->tipe_depresiasi,
            'tahun' => $request->tahun,
            'depresiasi' => $request->depresiasi,

        ]);

        return redirect('groupAsset')->with('toast_success', 'Data Berhasil Disimpan!');
    }

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
