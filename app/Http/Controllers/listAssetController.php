<?php

namespace App\Http\Controllers;

use App\Models\satuan;
use App\Models\supplier;
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
        //dd(url('/public/storage/images/1675215734DSC_1015.JPG'));
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
        $kode = $this->kode();
        return view('halaman.listAsset', compact('listasset', 'departement', 'datakaryawan', 'supplier', 'groupasset', 'satuan', 'kode'));
    }

    public function kode(){
        $listasset = DB::table('list_asset')->orderBy('id_list_aset','desc')->limit(1)->get()->toArray();
        // $this->db->select('RIGHT(barang.kode_barang,2) as kode_barang', FALSE);
        // $this->db->order_by('kode_barang','DESC');    
        // $datakaryawan->get('nik');    
        // $query = $datakaryawan->latest(); 
        //dd(); //cek dulu apakah ada sudah ada kode di tabel.    
        if(count($listasset) <> 0){      
            //cek kode jika telah tersedia  
            foreach ($listasset as $key => $value) {
                # code...  
                $data = $value->kode_aset;      
            }
            //  $batas = str_pad(12, 3, "0", STR_PAD_LEFT);   
            $kodeTemp = intval($data) + 1; 
            $newKodeString = substr($kodeTemp, -4);
            $kode = intval($newKodeString);
            // dd($kode);

        }
        else{      
             $kode = 1;  //cek jika kode belum terdapat pada table
        }
            $tgl=date('mY'); 
            $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);    
            $kodetampil = $tgl.$batas;  //format kode
            return $kodetampil;  
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
        
        $satuan = DB::table('satuan')->where('status_satuan','=','1')->get();
        $supplier = DB::table('supplier')->where('status_supplier','=','1')->get();
        $groupasset = DB::table('group_asset')->where('status_grup_asset','=','1')->get();
        $datakaryawan = DB::table('data_karyawan')->where('status_data_karyawan','=','1')->get();
        $departement = DB::table('departement')->where('status','=','1')->get();
        
        return view('halaman.listAsset', compact('listasset', 'departement', 'datakaryawan', 'supplier', 'groupasset', 'satuan'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // dd($listasset->lokasi);
        $request->validate([

            'nama_aset' => 'required',
            'kode_aset' => 'required',
            'id_grup' => 'required',
            'tgl_beli' => 'required',
            'tgl_pakai' => 'required',
            'lokasi' => 'required',
            'harga_perolehan' => 'required',
            'keterangan' => 'required',
            'id_satuan' => 'required',
            'foto_aset' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048',
            'id_supplier' => 'required',
            'no_faktur' => 'required',
            'id_departement' => 'required',
            'id_karyawan' => 'required',
            'umur' => 'required',
            //'tarif' => 'required',    
        ]);


<<<<<<< HEAD
        // if($request->foto_aset('foto_aset')) {
        //     $foto_aset = $request->foto_aset('foto_aset');
        //     $filename = time().'_'.$foto_aset->getClientOriginalName();
   
        //     // File upload location
        //     $location = 'files';
   
        //     // Upload file
        //     $foto_aset->move($location,$filename);
   
        //     Session::flash('message','Upload Successfully.');
        //     Session::flash('alert-class', 'alert-success');
        //  }else{
        //     Session::flash('message','File not uploaded.');
        //     Session::flash('alert-class', 'alert-danger');
        //  }
   

        $requestData = $request->all();
        $fileName = time().$request->file('foto_aset')->getClientOriginalName();
        $path = $request->file('foto_aset')->storeAs('images', $fileName, 'public');
        $requestData["foto_aset"] = '/storage/'.$path;
            
        listAsset::create([
=======
        listAsset::create([                                                                                                       
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'id_grup' => $request->id_grup,
            'tgl_beli' => $request->tgl_beli,
            'tgl_pakai' => $request->tgl_pakai,
<<<<<<< HEAD
            'lokasi' => $request->lokasi,
=======
            'status_list_aset' => $request->status_list_aset,
            //'lokasi' => $request->lokasi,
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
            'harga_perolehan' => $request->harga_perolehan,
            'keterangan' => $request->keterangan,
            'id_satuan' => $request->id_satuan,
            'foto_aset' => $requestData["foto_aset"],
            'id_supplier' => $request->id_supplier,
            'no_faktur' => $request->no_faktur,
            'id_departement' => $request->id_departement,
            'id_karyawan' => $request->id_karyawan,
            'umur' => $request->umur,
            // 'tarif' =>$request->tarif,
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
    public function listFoto($id)
    {
        $listasset = listAsset::get()->toArray();
        return response()->json($listasset);
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
  
        $listasset = listAsset::findorfail($request->id_list_aset);
        $listasset->update($request->all());
        return redirect('listAsset')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $listasset = listAsset::findorfail($request->id_list_aset);
        $listasset->update($request->all());
<<<<<<< HEAD
        return redirect('listAsset')->with('status', 'Data Berhasil Diupdate!');
=======
        return redirect('listAsset')->with('success', 'Data Berhasil Diupdate!');
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
    }
}