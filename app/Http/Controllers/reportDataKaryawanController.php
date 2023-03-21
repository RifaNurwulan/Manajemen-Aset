<?php

namespace App\Http\Controllers;
use Dompdf\Options;
use PDF;
use Dompdf\Dompdf;
use App\Models\jabatan;
use App\Models\dataKaryawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reportDataKaryawanController extends Controller
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
        $jabatan= DB::table('jabatan')->where('status_jabatan','=','1')->get();
        $datakaryawan = DB::table('data_karyawan')
        ->leftjoin('jabatan', 'data_karyawan.id_jabatan', '=', 'jabatan.id_jabatan')
        ->select('data_karyawan.*', 'jabatan.desc_jabatan')
        ->get();
        return view('halaman.reportDataKaryawan', compact('datakaryawan', 'jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function preview(Request $request)
    {
        $dari = $request->tglawal_pre;
        $sampai = $request->tglakhir_pre;
        $datakaryawan = DB::table('data_karyawan')
        ->leftjoin('jabatan', 'data_karyawan.id_jabatan', '=', 'jabatan.id_jabatan')
        ->whereDate('data_karyawan.created_at', '>=', $dari)
        ->whereDate('data_karyawan.created_at', '<=', $sampai)
        ->select('data_karyawan.*', 'jabatan.desc_jabatan')
        ->get();
        return view('halaman.reportDataKaryawan', compact('datakaryawan'))
        ->with('success', 'Data berhasil diproses')
        ->with('url', url('/'));
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

    public function cetakDataKaryawanPertanggal($tglawal, $tglakhir){
        //dd("Tanggal Awal : " .$tglawal, "Tanggal Akhir : " .$tglakhir);
        $jabatan = DB::table('jabatan')->where('status_jabatan','=','1')->get();
        $datakaryawan = DB::table('data_karyawan')
        ->leftjoin('jabatan','data_karyawan.id_jabatan','=','jabatan.id_jabatan')
        ->whereBetween('jabatan.created_at',[$tglawal, $tglakhir])
        ->select('data_karyawan.*','jabatan.desc_jabatan')
        ->get();
        $path = base_path('logomst.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/'.$type.';base64,'. base64_encode($data);
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('halaman.cetakKaryawanPertanggal', compact('datakaryawan', 'jabatan', 'tglawal', 'tglakhir', 'pic'))->setPaper('A4', 'potrait');
        // $pdf = PDF::loadView('halaman.cetakKaryawanPertanggal', compact('datakaryawan', 'jabatan', 'tglawal', 'tglakhir', 'pic'))->setPaper('A4', 'potrait');
        //$pdf->getDomPDF()->get_canvas()->image(asset('template/images/logo/logomst.png'), 0, 0, 45, 45, '', '', false, false);

       
        return $pdf->download('Laporan Data Karyawan.pdf');

    }

    public function previewForm()
    {
        return view('halaman.reportDataKaryawan');
    }

    public function previewPertanggal($tglawal, $tglakhir)
    {
        // dd("sadasdadadada");
        // dd($tglawal);
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
        ->leftjoin('jabatan', 'data_karyawan.id_jabatan', '=', 'jabatan.id_jabatan')
        ->whereBetween('list_asset.created_at',[$tglawal, $tglakhir])
        ->select('data_karyawan.*', 'satuan.nama_satuan', 'supplier.nama_supplier', 'group_asset.nama_grup_aset', 'jabatan.desc_jabatan', 'departement.nama_departement')
        ->get();
        $previewtanggaldatakaryawan =  dataKaryawan::with('jabatan')->whereBetween('data_karyawan.created_at', [$tglawal, $tglakhir])->get();
        return response()->json(['success'=>$previewtanggaldatakaryawan, 'status' => 1]);
        // return view('halaman.previewTanggalDataKaryawan', compact('previewtanggaldatakaryawan', 'departement', 'datakaryawan', 'supplier', 'groupasset', 'satuan'));
     

}
}
