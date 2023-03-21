<?php

namespace App\Http\Controllers;

use PDF;
use Dompdf\Dompdf;
use App\Models\perpindahanAsset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reportHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historyasset = DB::table('perpindahan_asset')
        ->leftjoin('list_asset','perpindahan_asset.id_list_aset','=','list_asset.id_list_aset')
        ->leftjoin('departement as departement_to','perpindahan_asset.id_departement','=','departement_to.id_departement')
        ->leftjoin('data_karyawan as data_karyawan_to','perpindahan_asset.id_karyawan','=','data_karyawan_to.id_karyawan')
        ->leftjoin('departement as departement_from','perpindahan_asset.id_departement_before','=','departement_from.id_departement')
        ->leftjoin('data_karyawan as data_karyawan_from','perpindahan_asset.id_karyawan_before','=','data_karyawan_from.id_karyawan')
        ->select('perpindahan_asset.*','list_asset.kode_aset', 'list_asset.nama_aset', 'departement_to.nama_departement', 'data_karyawan_to.nama_karyawan', 'departement_from.nama_departement as nama_departement_from', 'data_karyawan_from.nama_karyawan as nama_karyawan_from')
        ->get();
        return view('halaman.historyAsset', compact('historyasset'));
    }

    public function cetakLogAssetPertanggal($tglawal, $tglakhir){
        //dd("Tanggal Awal : " .$tglawal, "Tanggal Akhir : " .$tglakhir);
        $departement = DB::table('departement')->get();
        $datakaryawan = DB::table('data_karyawan')->get();
        $listasset = DB::table('list_asset')->get();
        $historyasset = DB::table('perpindahan_asset')
        ->leftjoin('list_asset','perpindahan_asset.id_list_aset','=','list_asset.id_list_aset')
        ->leftjoin('departement as departement_to','perpindahan_asset.id_departement','=','departement_to.id_departement')
        ->leftjoin('data_karyawan as data_karyawan_to','perpindahan_asset.id_karyawan','=','data_karyawan_to.id_karyawan')
        ->leftjoin('departement as departement_from','perpindahan_asset.id_departement_before','=','departement_from.id_departement')
        ->leftjoin('data_karyawan as data_karyawan_from','perpindahan_asset.id_karyawan_before','=','data_karyawan_from.id_karyawan')
        ->whereBetween('perpindahan_asset.created_at',[$tglawal, $tglakhir])
        ->select('perpindahan_asset.*','list_asset.kode_aset', 'list_asset.nama_aset', 'departement_to.nama_departement', 'data_karyawan_to.nama_karyawan', 'departement_from.nama_departement as nama_departement_from', 'data_karyawan_from.nama_karyawan as nama_karyawan_from')
        ->get();

        $dompdf = new \Dompdf\Dompdf();
        $dompdf->set_option('isRemoteEnabled',TRUE);

        $path = base_path('logomst.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/'.$type.';base64,'. base64_encode($data);
    //     foreach ($listasset as $item){
       
    //     //$imageData = base64_encode(file_get_contents($image));
    //     // $mimeType = mime_content_type($image);
    //     // $src = 'data: '. $mimeType .';base64,' . $imageData;
    // }
       
        ini_set('max_execution_time', 300);
        // $requestData = $request->all();
        // $fileName = time().$listasset->file('foto_aset')->getClientOriginalName();
        // $pathfoto = $request->file('foto_aset')->storeAs('images', $fileName, 'public');
        // $requestData["foto_aset"] = '/storage/'.$pathfoto;
        // // dd( Storage::url($requestData["foto_aset"].$pathfoto) );
        $pdf = PDF::loadView('halaman.cetakLogAssetPertanggal', compact('historyasset', 'listasset', 'datakaryawan', 'departement','pic', 'tglawal', 'tglakhir'))->setPaper('A4', 'landscape');
        return $pdf->download('Laporan Log Asset.pdf');

    }
   
    // public function search(Request $request)
    // {
    //     // menangkap data pencarian
    //     $search = $request->search;

    //     // mengambil data dari table dataKaryawan sesuai pencarian data
    //     $datakaryawan = DB::table('data_karyawan')
    //         ->where('nama_karyawan', 'like', "%" . $search . "%")
    //         ->paginate();

    //     // mengirim data pegawai ke view index
    //     return view('halaman.dataKaryawan', ['dataKaryawan' =>  $datakaryawan]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function preview(Request $request)
    {
        $dari = $request->tglawal_pre;
        $sampai = $request->tglakhir_pre;
        $historyasset = DB::table('perpindahan_asset')
        ->leftjoin('list_asset','perpindahan_asset.id_list_aset','=','list_asset.id_list_aset')
        ->leftjoin('departement as departement_to','perpindahan_asset.id_departement','=','departement_to.id_departement')
        ->leftjoin('data_karyawan as data_karyawan_to','perpindahan_asset.id_karyawan','=','data_karyawan_to.id_karyawan')
        ->leftjoin('departement as departement_from','perpindahan_asset.id_departement_before','=','departement_from.id_departement')
        ->leftjoin('data_karyawan as data_karyawan_from','perpindahan_asset.id_karyawan_before','=','data_karyawan_from.id_karyawan')
        ->whereDate('list_asset.created_at', '>=', $dari)
        ->whereDate('list_asset.created_at', '<=', $sampai) // perbaikan pada baris ini
        ->select('perpindahan_asset.*','list_asset.kode_aset', 'list_asset.nama_aset', 'departement_to.nama_departement', 'data_karyawan_to.nama_karyawan', 'departement_from.nama_departement as nama_departement_from', 'data_karyawan_from.nama_karyawan as nama_karyawan_from')
        ->get();
        return view('halaman.historyAsset', compact('historyasset'));
    }

}
