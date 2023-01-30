<?php

namespace App\Http\Controllers;

use App\Models\jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = DB::table('jabatan')->get();
        //dd($departement);
        return view('halaman.jabatan', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman.jabatan');
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
            'kode_jabatan' => 'required',
            'jabatan' => 'required',
        ]);

        // dd($request->all());

        jabatan::create([
            'kode_jabatan' => $request->kode_jabatan,
            'jabatan' => $request->jabatan,
        ]);

        return redirect('jabatan')->with('success', 'Data Berhasil Disimpan!');
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
        $jabatan = jabatan::findorfail($id);
        return view('halaman.jabatan', compact('jabatan'));
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
