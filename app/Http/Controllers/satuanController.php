<?php

namespace App\Http\Controllers;

use App\Models\satuan;
use Illuminate\Http\Request;

class satuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $satuan = satuan::paginate(10);
        return view('halaman.satuan', compact('satuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman.satuan');
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
            'kode_satuan' => 'required',
            'nama_satuan' => 'required',
        ]);

        // dd($request->all());

        satuan::create([
            'kode_satuan' => $request->kode_satuan,
            'nama_satuan' => $request->nama_satuan,
        ]);

        return redirect('satuan')->with('success', 'Data Berhasil Disimpan!');
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
        $satuan = satuan::findorfail($id);
        return view('halaman.satuan', compact('satuan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $satuan = satuan::findorfail($request->id_satuan);
        $satuan->update($request->all());
        return redirect('satuan')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $satuan = satuan::findorfail($request->id_satuan);
        $satuan->update($request->all());
        return redirect('satuan')->with('status', 'Data Berhasil Diupdate!');
    }
}
