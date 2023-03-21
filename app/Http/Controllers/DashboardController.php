<?php

namespace App\Http\Controllers;
use App\Models\pemeliharaanAsset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = DB::table('supplier')->where('status_supplier', 1)->get();
        $jumlahSupplier = count($supplier);
        $karyawan = DB::table('data_karyawan')->where('status_data_karyawan', 1)->get();
        $jumlahKaryawan = count($karyawan);
        $listAsset = DB::table('list_asset')->where('id_pelepasanstatus', 1)->get();
        $jumlahListAsset = count($listAsset);
        $listAssetNon = DB::table('list_asset')->where('id_pelepasanstatus', '<>', 1)->get();
        $jumlahListAssetNon = count($listAssetNon);
        $pemeliharaan_asset = DB::table('pemeliharaan_asset')->get();
        return view('halaman.dashboard',compact('pemeliharaan_asset', 'jumlahSupplier', 'jumlahKaryawan', 'jumlahListAsset', 'jumlahListAssetNon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
