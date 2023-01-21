<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class supplierController extends Controller
{
    public function index()
    {

        $supplier = DB::table('supplier')->paginate(10);
        return view('halaman.supplier', compact('supplier'));
    }

    public function search(Request $request)
    {
        // menangkap data pencarian
        $search = $request->search;

        // mengambil data dari table supplier sesuai pencarian data
        $supplier = DB::table('supplier')
            ->where('nama_supplier', 'like', "%" . $search . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('halaman.supplier', ['supplier' => $supplier]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman.supplier');
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
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'pic' => 'required',
            'telp' => 'required',
            'mobile_phone' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'keterangan' => 'required',
        ]);

        //dd($request->all());

        supplier::create([
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'pic' => $request->pic,
            'telp' => $request->telp,
            'mobile_phone' => $request->mobile_phone,
            'fax' => $request->fax,
            'email' => $request->email,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('supplier')->with('success', 'Data Berhasil Disimpan!');
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
    public function edit(Request $request, $id)
    {
        $supplier = supplier::findorfail($id);
        $supplier->update($request->all());
        return redirect('supplier')->with('success', 'Data Berhasil Diupdate!');
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
        $supplier = supplier::findorfail($id);
        $supplier->update($request->all());
        return redirect('supplier')->with('success', 'Data Berhasil Diupdate!');
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
