<?php

namespace App\Http\Controllers;

use PDF;
use Dompdf\Dompdf;
use App\Models\reportPelepasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reportPenghapusanAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listasset = DB::table('list_asset')->get();
        $statuspelepasan = DB::table('pelepasanstatus_asset')->get();
        $hapusAsset = DB::table('riwayatpenghapusan_asset')
        ->leftjoin('list_asset','riwayatpenghapusan_asset.id_list_aset','=','list_asset.id_list_aset')
        ->leftjoin('pelepasanstatus_asset','riwayatpenghapusan_asset.id_pelepasanstatus','=','pelepasanstatus_asset.id_pelepasanstatus')
        ->select('riwayatpenghapusan_asset.*','list_asset.kode_aset', 'list_asset.nama_aset', 'pelepasanstatus_asset.desc_pelepasanstatus')
        ->get();
        return view('halaman.reportPenghapusanAsset', compact('hapusAsset', 'listasset', 'statuspelepasan'));
    }

       public function cetakHapusAssetPertanggal($tglawal, $tglakhir){
        //dd("Tanggal Awal : " .$tglawal, "Tanggal Akhir : " .$tglakhir);
        $listasset = DB::table('list_asset')->get();
        $statuspelepasan = DB::table('pelepasanstatus_asset')->get();
        $hapusAsset = DB::table('riwayatpenghapusan_asset')
        ->leftjoin('list_asset','riwayatpenghapusan_asset.id_list_aset','=','list_asset.id_list_aset')
        ->leftjoin('pelepasanstatus_asset','riwayatpenghapusan_asset.id_pelepasanstatus','=','pelepasanstatus_asset.id_pelepasanstatus')
        ->whereBetween('riwayatpenghapusan_asset.created_at',[$tglawal, $tglakhir])
        ->select('riwayatpenghapusan_asset.*','list_asset.kode_aset', 'list_asset.nama_aset', 'pelepasanstatus_asset.desc_pelepasanstatus')
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
        $pdf = PDF::loadView('halaman.cetakPenghapusanAssetPertanggal', compact('hapusAsset', 'listasset', 'statuspelepasan', 'pic', 'tglawal', 'tglakhir'))->setPaper('A4', 'potrait');
        return $pdf->download('Laporan Penghapusan Asset.pdf');

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
        $listasset = DB::table('list_asset')->get();
        $statuspelepasan = DB::table('pelepasanstatus_asset')->get();
        $hapusAsset = DB::table('riwayatpenghapusan_asset')
            ->leftjoin('list_asset','riwayatpenghapusan_asset.id_list_aset','=','list_asset.id_list_aset')
            ->leftjoin('pelepasanstatus_asset','riwayatpenghapusan_asset.id_pelepasanstatus','=','pelepasanstatus_asset.id_pelepasanstatus')
            ->whereDate('riwayatpenghapusan_asset.created_at', '>=', $dari)
            ->whereDate('riwayatpenghapusan_asset.created_at', '<=', $sampai)
            ->select('riwayatpenghapusan_asset.*','list_asset.kode_aset', 'list_asset.nama_aset', 'pelepasanstatus_asset.desc_pelepasanstatus')
            ->get();
        // $data = reportPelepasan::whereDate('created_at','>=', $dari)->whereDate('created_at','<=',$sampai)->orderBy('created_at', 'desc')->get();
        return view('halaman.reportPenghapusanAsset', compact('hapusAsset', 'listasset', 'statuspelepasan'));
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
