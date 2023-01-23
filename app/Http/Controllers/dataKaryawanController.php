<?php

namespace App\Http\Controllers;

use App\Models\dataKaryawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dataKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datakaryawan = DB::table('data_karyawan')->paginate(10);
        return view('halaman.dataKaryawan', compact('datakaryawan'));
    }

    public function search(Request $request)
    {
        // menangkap data pencarian
        $search = $request->search;

        // mengambil data dari table dataKaryawan sesuai pencarian data
        $datakaryawan = DB::table('data_karyawan')
            ->where('nama_karyawan', 'like', "%" . $search . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('halaman.dataKaryawan', ['dataKaryawan' =>  $datakaryawan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman.dataKaryawan');
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
            'nama_karyawan' => 'required',
            'nik' => 'required',
            // 'jabatan' => 'required',
        ]);

        //dd($request->all());

        dataKaryawan::create([
            'nama_karyawan' => $request->nama_karyawan,
            'nik' => $request->nik,
            // 'jabatan' => $request->jabatan,
        ]);

        return redirect('dataKaryawan')->with('success', 'Data Berhasil Disimpan!');
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
        $datakaryawan = dataKaryawan::findorfail($id);
        return view('halaman.dataKaryawan', compact('datakaryawan'));
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
        $datakaryawan = dataKaryawan::findorfail($id);
        $datakaryawan->update($request->all());
        return redirect('dataKaryawan')->with('success', 'Data Berhasil Disimpan!');
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
