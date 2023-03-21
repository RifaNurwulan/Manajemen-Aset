<?php

namespace App\Http\Controllers;
use App\Models\listAsset;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ListAsset as GlobalListAsset;

class QrCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = listAsset::all();
        return view ('halaman.qrcode', ['listAsset' => $items]);
      
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
        $data = new ListAsset;
        $data->kode = $request->kode_aset;
        $data->name = $request->nama_aset;
        $data->lokasi = $request->lokasi;
        //$data->phone = $request->phone;
        $data->save();
        return back();

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

    public function generate ($id)
    {
   
        $item = ListAsset::with(['dataKaryawan', 'departement', 'satuan'])->find($id);

        if ($item != null) {
            $nama_karyawan = $item->dataKaryawan->nama_karyawan;
            $nama_departement = $item->departement->nama_departement;
            $nama_satuan = $item->satuan->nama_satuan;
        
            $data = 'Nama: ' . $item->nama_aset . '; ' .
                    'Lok: ' . $item->lokasi . '; ' .
                    'Kode: ' . $item->kode_aset . '; ' .
                    'Tgl beli: ' . $item->tgl_beli . '; ' .
                    'pic: ' . $nama_karyawan . '; ' .
                    'Dep: ' . $nama_departement . '; ' .
                    'Sat: ' . $nama_satuan . ';';
        
            $qrcode = QrCode::size(300)->generate($data);
        
            return view('halaman.qrcode', compact('item', 'qrcode'));
        } else {
            return redirect()->back()->with('error', 'Item not found.');
        }
        
    }
    public function generateView ($id)
    {
        $item = listAsset::find($id);
        if ($item <> null) {
            $itemArray = $item->toArray();
        }
        // dd($itemArray['foto_aset']);
        return view('halaman.test',compact('itemArray'));
    // $data =  ListAsset::findOrFail($id);
    // $qrcode = QrCode::size(400)->generate($data->name);
    // return view('qrcode',compact('qrcode'));
    }

    public function showing ($id)
    {
        // if () {

        // }
        $qrcode = QrCode::size(100)->generate(route('generateView', $id));
        return view('halaman.qrcode',compact('qrcode'));
    }
    public function showView($id)
{
    $item = listAsset::with(['departement', 'dataKaryawan', 'satuan'])->find($id);
    if ($item !== null) {
        $itemArray = $item->toArray();
        return view('halaman.test', compact('itemArray'));
    } else {
        abort(404);
    }
}



}
