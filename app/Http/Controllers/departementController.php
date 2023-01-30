<?php

namespace App\Http\Controllers;

use App\Models\departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class departementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departement = DB::table('departement')->get();
        //dd($departement);
        return view('halaman.departement', compact('departement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman.departement');
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
            //'id_departement' => 'required',
            'kode_departement' => 'required',
            'nama_departement' => 'required',
            'singkatan' => 'required',
        ]);

        //dd($request->all());

        departement::create([
            'kode_departement' => $request->kode_departement,
            'nama_departement' => $request->nama_departement,
            'singkatan' => $request->singkatan,
        ]);

        return redirect('departement')->with('success', 'Data Berhasil Disimpan!');
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
        $departement = departement::findorfail($id);
        return view('halaman.departement',compact('departement'));
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
        $departement = departement::findorfail($request->id_departement);
        $departement->update($request->all());
        return redirect('departement')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $departement = departement::findorfail($request->id_departement);
        $departement->update($request->all());
        return redirect('departement')->with('status', 'Data Berhasil Dihapus!');
    }
}
