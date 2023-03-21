<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\listAsset;
use Dompdf\Options;
use PDF;
use Dompdf\Dompdf;
use App\Models\satuan;
use App\Models\supplier;
use App\Models\departement;

class reportDaftarAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $pemeliharaan_asset = DB::table('pemeliharaan_asset')->get();
        $satuan = DB::table('satuan')->where('status_satuan','=','1')->get();
        $supplier = DB::table('supplier')->where('status_supplier','=','1')->get();
        $groupasset = DB::table('group_asset')->where('status_grup_asset','=','1')->get();
        $datakaryawan = DB::table('data_karyawan')->where('status_data_karyawan','=','1')->get();
        $departement = DB::table('departement')->where('status','=','1')->get();
        $listasset = DB::table('list_asset')
        ->leftjoin('satuan', 'list_asset.id_satuan', '=', 'satuan.id_satuan')
        ->leftjoin('supplier', 'list_asset.id_supplier', '=', 'supplier.id_supplier')
        ->leftjoin('group_asset', 'list_asset.id_grup', '=', 'group_asset.id_grup')
        ->leftjoin('data_karyawan', 'list_asset.id_karyawan', '=', 'data_karyawan.id_karyawan')
        ->leftjoin('departement', 'list_asset.id_departement', '=', 'departement.id_departement')
        ->select('list_asset.*', 'satuan.nama_satuan', 'supplier.nama_supplier', 'group_asset.nama_grup_aset', 'data_karyawan.nama_karyawan', 'departement.nama_departement')
        ->get();
        return view('halaman.reportDaftarAsset', compact('listasset', 'satuan'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('halaman.previewtanggal');
    // }

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

    public function cetakDaftarAssetPertanggal($tglawal, $tglakhir){
        //dd("Tanggal Awal : " .$tglawal, "Tanggal Akhir : " .$tglakhir);
        $pelepasan = DB::table('pelepasanstatus_asset')->get();
        $satuan = DB::table('satuan')->where('status_satuan','=','1')->get();
        $supplier = DB::table('supplier')->where('status_supplier','=','1')->get();
        $groupasset = DB::table('group_asset')->where('status_grup_asset','=','1')->get();
        $datakaryawan = DB::table('data_karyawan')->where('status_data_karyawan','=','1')->get();
        $departement = DB::table('departement')->where('status','=','1')->get();
        $listasset = DB::table('list_asset')->where('status_list_aset','=','1')->get();
        $listasset = DB::table('list_asset')
        ->leftjoin('pelepasanstatus_asset', 'list_asset.id_pelepasanstatus', '=', 'pelepasanstatus_asset.id_pelepasanstatus')
        ->leftjoin('satuan', 'list_asset.id_satuan', '=', 'satuan.id_satuan')
        ->leftjoin('supplier', 'list_asset.id_supplier', '=', 'supplier.id_supplier')
        ->leftjoin('group_asset', 'list_asset.id_grup', '=', 'group_asset.id_grup')
        ->leftjoin('data_karyawan', 'list_asset.id_karyawan', '=', 'data_karyawan.id_karyawan')
        ->leftjoin('departement', 'list_asset.id_departement', '=', 'departement.id_departement')
        ->leftjoin('jabatan', 'data_karyawan.id_jabatan', '=', 'jabatan.id_jabatan')
        ->whereBetween('list_asset.created_at',[$tglawal, $tglakhir])
        ->select('list_asset.*', 'satuan.nama_satuan', 'supplier.nama_supplier', 'group_asset.nama_grup_aset', 'jabatan.desc_jabatan', 'departement.nama_departement', 'data_karyawan.nama_karyawan','pelepasanstatus_asset.desc_pelepasanstatus')
        ->get();
        $path = base_path('logomst.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/'.$type.';base64,'. base64_encode($data);
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('halaman.cetakDaftarAssetPertanggal', compact('listasset', 'supplier', 'departement', 'satuan', 'tglawal', 'tglakhir', 'pic', 'pelepasan'))->setPaper('A4', 'potrait');
        return $pdf->download('Laporan Daftar Asset.pdf');

    }


    // public function previewForm()
    // {
    //     return view('halaman.reportDaftarAsset');
    // }

    public function preview(Request $request)
    {
        $dari = $request->tglawal_pre;
        $sampai = $request->tglakhir_pre;
        $listasset = DB::table('list_asset')
            ->leftjoin('pelepasanstatus_asset', 'list_asset.id_pelepasanstatus', '=', 'pelepasanstatus_asset.id_pelepasanstatus')
            ->leftjoin('satuan', 'list_asset.id_satuan', '=', 'satuan.id_satuan')
            ->leftjoin('supplier', 'list_asset.id_supplier', '=', 'supplier.id_supplier')
            ->leftjoin('group_asset', 'list_asset.id_grup', '=', 'group_asset.id_grup')
            ->leftjoin('data_karyawan', 'list_asset.id_karyawan', '=', 'data_karyawan.id_karyawan')
            ->leftjoin('departement', 'list_asset.id_departement', '=', 'departement.id_departement')
            ->leftjoin('jabatan', 'data_karyawan.id_jabatan', '=', 'jabatan.id_jabatan')
            ->whereDate('list_asset.created_at', '>=', $dari)
            ->whereDate('list_asset.created_at', '<=', $sampai) // perbaikan pada baris ini
            ->select('list_asset.*', 'satuan.nama_satuan', 'supplier.nama_supplier', 'group_asset.nama_grup_aset', 'jabatan.desc_jabatan', 'departement.nama_departement', 'data_karyawan.nama_karyawan','pelepasanstatus_asset.desc_pelepasanstatus')
            ->get();
        return view('halaman.reportDaftarAsset', compact('listasset'));
    }
}
