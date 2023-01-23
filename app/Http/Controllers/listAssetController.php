<?php

namespace App\Http\Controllers;

use App\Models\listAsset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class listAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listasset = DB::table('list_asset')->paginate(10);
        return view('halaman.listAsset', compact('listAsset'));
    }

    public function search(Request $request)
    {
        // menangkap data pencarian
        $search = $request->search;

        // mengambil data dari table listAsset sesuai pencarian data
        $listasset = DB::table('list_asset')
            ->where('kode_aset', 'like', "%" . $search . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('halaman.listAsset', ['listAsset' =>  $listasset]);
    }


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
    public function store(Request $request)
    {
        $request->validate([
            'nama_aset' => 'required',
            'kode_aset' => 'required',
            'group_aset' => 'required',
            'tgl_beli' => 'required',
            'tgl_pakai' => 'required',
            //'lokasi' => 'required',
            'harga_perolehan' => 'required',
            'keterangan' => 'required',
            //'satuan' => 'required',
            //'foto_aset' => 'required',
            //'suplier' => 'required',
            'no_faktur' => 'required',
            //'departement' => 'required',
            //'pic' => 'required',
            'umur' => 'required',
            //'tarif' => 'required',    
        ]);

        //dd($request->all());

        listAsset::create([
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'group_aset' => $request->group_aset,
            'tgl_beli' => $request->tgl_beli,
            'tgl_pakai' => $request->tgl_pakai,
            //'lokasi' => $request->lokasi,
            'harga_perolehan' => $request->harga_perolehan,
            'keterangan' => $request->keterangan,
            //'satuan' => $request->satuan,
            'foto_aset' => $request->foto_aset,
            'suplier' => $request->suplier,
            'no_faktur' => $request->no_faktur,
            //'departement' => $request->departement,
            //'pic' => $request->pic,
            'umur' => $request->umur,
            //'tarif' =>$request->tarif,
        ]);

        return redirect('listAsset')->with('success', 'Data Berhasil Disimpan!');
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
        $listasset = listAsset::findorfail($id);
        return view('halaman.listAsset', compact('listasset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_list_aset)
    {
        /**$listasset = listAsset::findorfail($id_list_aset);
        $listasset->update($request->all());
        return redirect('listAsset')->with('toast_success', 'Data Berhasil Diupdate!');*/
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
