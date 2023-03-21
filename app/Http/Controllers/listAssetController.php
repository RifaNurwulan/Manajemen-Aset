<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;
use Dompdf\Dompdf;
=======

>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
use App\Models\satuan;
use App\Models\supplier;
use App\Models\listAsset;
use App\Models\reportPelepasan;
use App\Models\perpindahanAsset;
use App\Models\pemeliharaanAsset;
use App\Models\statusPelepasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
// use Intervention\Image\Facades\Image;

class listAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        
        //dd(url('/public/storage/images/1675215734DSC_1015.JPG'));
        $pemeliharaan_asset = DB::table('pemeliharaan_asset')->get();
=======
        //dd(url('/public/storage/images/1675215734DSC_1015.JPG'));
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
        $satuan = DB::table('satuan')->where('status_satuan','=','1')->get();
        $supplier = DB::table('supplier')->where('status_supplier','=','1')->get();
        $groupasset = DB::table('group_asset')->where('status_grup_asset','=','1')->get();
        $datakaryawan = DB::table('data_karyawan')->where('status_data_karyawan','=','1')->get();
        $departement = DB::table('departement')->where('status','=','1')->get();
<<<<<<< HEAD
        $pelepasan = DB::table('pelepasanstatus_asset')->get();
        $listasset = DB::table('list_asset')
        ->leftjoin('pelepasanstatus_asset', 'list_asset.id_pelepasanstatus', '=', 'pelepasanstatus_asset.id_pelepasanstatus')
=======
        $listasset = DB::table('list_asset')
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
        ->leftjoin('satuan', 'list_asset.id_satuan', '=', 'satuan.id_satuan')
        ->leftjoin('supplier', 'list_asset.id_supplier', '=', 'supplier.id_supplier')
        ->leftjoin('group_asset', 'list_asset.id_grup', '=', 'group_asset.id_grup')
        ->leftjoin('data_karyawan', 'list_asset.id_karyawan', '=', 'data_karyawan.id_karyawan')
        ->leftjoin('departement', 'list_asset.id_departement', '=', 'departement.id_departement')
<<<<<<< HEAD
        ->select('list_asset.*', 'satuan.nama_satuan', 'supplier.nama_supplier', 'group_asset.nama_grup_aset', 'data_karyawan.nama_karyawan', 'departement.nama_departement', 'pelepasanstatus_asset.desc_pelepasanstatus')
        ->get();
        $kode = $this->kode();
        return view('halaman.listAsset', compact('listasset', 'departement', 'datakaryawan', 'supplier', 'groupasset', 'satuan', 'kode', 'pelepasan', 'pemeliharaan_asset'));
    }

    public function cetakListAssetPertanggal($tglawal, $tglakhir){
        //dd("Tanggal Awal : " .$tglawal, "Tanggal Akhir : " .$tglakhir);
        $satuan = DB::table('satuan')->where('status_satuan','=','1')->get();
        $supplier = DB::table('supplier')->where('status_supplier','=','1')->get();
        $groupasset = DB::table('group_asset')->where('status_grup_asset','=','1')->get();
        $datakaryawan = DB::table('data_karyawan')->where('status_data_karyawan','=','1')->get();
        $departement = DB::table('departement')->where('status','=','1')->get();
        $pelepasan = DB::table('pelepasanstatus_asset')->get();
        $listasset = DB::table('list_asset')
        ->leftjoin('pelepasanstatus_asset', 'list_asset.id_pelepasanstatus', '=', 'pelepasanstatus_asset.id_pelepasanstatus')
        ->leftjoin('satuan', 'list_asset.id_satuan', '=', 'satuan.id_satuan')
        ->leftjoin('supplier', 'list_asset.id_supplier', '=', 'supplier.id_supplier')
        ->leftjoin('group_asset', 'list_asset.id_grup', '=', 'group_asset.id_grup')
        ->leftjoin('data_karyawan', 'list_asset.id_karyawan', '=', 'data_karyawan.id_karyawan')
        ->leftjoin('departement', 'list_asset.id_departement', '=', 'departement.id_departement')
        ->whereBetween('list_asset.created_at',[$tglawal, $tglakhir])
        ->select('list_asset.*', 'satuan.nama_satuan', 'supplier.nama_supplier', 'group_asset.nama_grup_aset', 'data_karyawan.nama_karyawan', 'departement.nama_departement', 'pelepasanstatus_asset.desc_pelepasanstatus')
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
        $pdf = PDF::loadView('halaman.cetakListAssetPertanggal', compact('listasset', 'departement', 'datakaryawan', 'supplier', 'groupasset', 'satuan', 'tglawal', 'tglakhir', 'pic', 'pelepasan'))->setPaper('A4', 'landscape');
        return $pdf->download('Laporan List Asset.pdf');

    }

    public function cetakDetail($id_list_aset){
        //dd("Tanggal Awal : " .$tglawal, "Tanggal Akhir : " .$tglakhir);
        $satuan = DB::table('satuan')->where('status_satuan','=','1')->get();
        $supplier = DB::table('supplier')->where('status_supplier','=','1')->get();
        $groupasset = DB::table('group_asset')->where('status_grup_asset','=','1')->get();
        $datakaryawan = DB::table('data_karyawan')->where('status_data_karyawan','=','1')->get();
        $departement = DB::table('departement')->where('status','=','1')->get();
        $pelepasan = DB::table('pelepasanstatus_asset')->get();
        $listasset = DB::table('list_asset')
        ->leftjoin('pelepasanstatus_asset', 'list_asset.id_pelepasanstatus', '=', 'pelepasanstatus_asset.id_pelepasanstatus')
        ->leftjoin('satuan', 'list_asset.id_satuan', '=', 'satuan.id_satuan')
        ->leftjoin('supplier', 'list_asset.id_supplier', '=', 'supplier.id_supplier')
        ->leftjoin('group_asset', 'list_asset.id_grup', '=', 'group_asset.id_grup')
        ->leftjoin('data_karyawan', 'list_asset.id_karyawan', '=', 'data_karyawan.id_karyawan')
        ->leftjoin('departement', 'list_asset.id_departement', '=', 'departement.id_departement')
        ->select('list_asset.*', 'satuan.nama_satuan', 'supplier.nama_supplier', 'group_asset.nama_grup_aset', 'data_karyawan.nama_karyawan', 'departement.nama_departement', 'pelepasanstatus_asset.desc_pelepasanstatus')
        ->where('id_list_aset',$id_list_aset)
        ->get();
        foreach ($listasset as $item){
        $id_list_aset = $item->id_list_aset; 
        $qrcode = QrCode::size(100)->generate(route('generateView', $id_list_aset));}

        // foreach ($listasset as $item) {
        //     $item->foto_aset = Storage::url($item->foto_aset);
        // }
        $dompdf = new \Dompdf\Dompdf();
        $dompdf->set_option('isRemoteEnabled',TRUE);

        $path = base_path('logomst.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/'.$type.';base64,'. base64_encode($data);
      
        ini_set('max_execution_time', 300);
        
        $pdf = PDF::loadView('halaman.cetakDetailListAsset', compact('listasset', 'departement', 'datakaryawan', 'supplier', 'groupasset', 'satuan', 'pic', 'qrcode', 'pelepasan'))->setPaper('A4', 'potrait');
        return $pdf->download('Detail List Asset.pdf');

    }

=======
        ->select('list_asset.*', 'satuan.nama_satuan', 'supplier.nama_supplier', 'group_asset.nama_grup_aset', 'data_karyawan.nama_karyawan', 'departement.nama_departement')
        ->get();
        $kode = $this->kode();
        return view('halaman.listAsset', compact('listasset', 'departement', 'datakaryawan', 'supplier', 'groupasset', 'satuan', 'kode'));
    }

>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
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
        // Menangkap jenis filter dan search dari request
        $search = $request->search;
        $filter = $request->filter;
        
        $filterstatus = $request->filterstatus;


        // mengambil data dari table listAsset sesuai pencarian data
        $satuan = DB::table('satuan')->get();
        $supplier = DB::table('supplier')->get();
        $groupasset = DB::table('group_asset')->get();
        $datakaryawan = DB::table('data_karyawan')->get();     
        $pelepasan = DB::table('pelepasanstatus_asset')->get();
        $departement = DB::table('departement')->get();
        $listasset = DB::table('list_asset')
        ->leftjoin('pelepasanstatus_asset', 'list_asset.id_pelepasanstatus', '=', 'pelepasanstatus_asset.id_pelepasanstatus')
        ->leftjoin('satuan', 'list_asset.id_satuan', '=', 'satuan.id_satuan')
        ->leftjoin('supplier', 'list_asset.id_supplier', '=', 'supplier.id_supplier')
        ->leftjoin('group_asset', 'list_asset.id_grup', '=', 'group_asset.id_grup')
        ->leftjoin('data_karyawan', 'list_asset.id_karyawan', '=', 'data_karyawan.id_karyawan')
        ->leftjoin('departement', 'list_asset.id_departement', '=', 'departement.id_departement')
        ->select('list_asset.*', 'satuan.nama_satuan', 'supplier.nama_supplier', 'group_asset.nama_grup_aset', 'data_karyawan.nama_karyawan', 'departement.nama_departement', 'pelepasanstatus_asset.desc_pelepasanstatus')
        ->when($filter && $filterstatus, function ($query) use ($filter, $filterstatus, $search) {
        return $query->where('pelepasanstatus_asset.id_pelepasanstatus', $filterstatus)
            ->where($filter, 'like', '%' . $search . '%');
        // dd("check");
        // return $query->where($filter, 'like', '%' . $search . '%')
        // ->where('id_pelepasanstatus', $filterstatus);
    })
    ->when($filter && !$filterstatus, function ($query) use ($filter, $search) {
        return $query->where($filter, 'like', '%' . $search . '%');
    })
    ->when($filterstatus && !$filter, function ($query) use ($filterstatus) {
        return $query->where('pelepasanstatus_asset.id_pelepasanstatus', $filterstatus);
    })
    ->when(empty($filter) && empty($filterstatus), function ($query) use ($search) {
        return $query->where(function ($query) use ($search) {
            $query->where('list_asset.kode_aset', 'like', '%' . $search . '%')
            ->orWhere('list_asset.nama_aset', 'like', '%' . $search . '%')
            ->orWhere('satuan.nama_satuan', 'like', '%' . $search . '%')
            ->orWhere('supplier.nama_supplier', 'like', '%' . $search . '%')
            ->orWhere('group_asset.nama_grup_aset', 'like', '%' . $search . '%')
            ->orWhere('data_karyawan.nama_karyawan', 'like', '%' . $search . '%')
            ->orWhere('departement.nama_departement', 'like', '%' . $search . '%')
            ->orWhere('list_asset.lokasi', 'like', '%' . $search . '%')
            ->orWhere('list_asset.metode', 'like', '%' . $search . '%')
            ->orWhere('pelepasanstatus_asset.desc_pelepasanstatus', 'like', '%' . $search . '%');
        });
    })
    // ->when($filter, function ($query) use ($filter, $search) {
        //     return $query->where($filter, 'like', '%' . $search . '%');
        // })
        // ->when(empty($filter) && empty($request->filterstatus), function ($query) use ($search) {
            //     return $query->where(function ($query) use ($search) {
                //         $query->where('list_asset.kode_aset', 'like', '%' . $search . '%')
                //               ->orWhere('list_asset.nama_aset', 'like', '%' . $search . '%')
                //               ->orWhere('satuan.nama_satuan', 'like', '%' . $search . '%')
    //               ->orWhere('supplier.nama_supplier', 'like', '%' . $search . '%')
    //               ->orWhere('group_asset.nama_grup_aset', 'like', '%' . $search . '%')
    //               ->orWhere('data_karyawan.nama_karyawan', 'like', '%' . $search . '%')
    //               ->orWhere('departement.nama_departement', 'like', '%' . $search . '%')
    //               ->orWhere('list_asset.lokasi', 'like', '%' . $search . '%')
    //               ->orWhere('list_asset.metode', 'like', '%' . $search . '%')
    //               ->orWhere('pelepasanstatus_asset.desc_pelepasanstatus', 'like', '%' . $search . '%');
    //     });
    // })
    // ->when($request->filled('filterstatus'), function ($query) use ($request) {
        //     return $query->where('pelepasanstatus_asset.id_pelepasanstatus', $request->filterstatus);
        // })
        ->paginate();

        $kode = $this->kode();
        
        return view('halaman.listAsset', compact('listasset', 'departement', 'datakaryawan', 'supplier', 'groupasset', 'satuan', 'kode', 'filter', 'search', 'pelepasan', 'filterstatus'));
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
<<<<<<< HEAD
        $messages = [
            'image' => ':Attribute harus berupa gambar',
            'required' => 'Kolom :attribute wajib diisi',
            'unique' => ':Attribute sudah ada', 
            'numeric' => ':Attribute harus berupa angka', 
            'id_departement.required' => 'Kolom departement wajib diisi', 
            'id_karyawan.required' => 'Kolom pic wajib diisi',
            'id_grup.required' => 'Kolom grup aset wajib diisi', 
            'id_supplier.required' => 'Kolom supplier wajib diisi', 
            'id_satuan.required' => 'Kolom satuan wajib diisi',
            'tgl_pakai.after' => 'Tgl pakai harus setelah tgl beli' 
        ];

        //    dd($request);
        $validator = Validator::make($request->all(), [
            'nama_aset' => 'required|unique:list_asset',
            'kode_aset' => 'required|unique:list_asset',
            'id_pelepasanstatus' => 'required',
=======
        // dd($request->all());
        // dd($listasset->lokasi);
        $request->validate([

            'nama_aset' => 'required',
            'kode_aset' => 'required',
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
            'id_grup' => 'required',
            'tgl_beli' => 'required',
            'tgl_pakai' => 'required|after:tgl_beli',
            'lokasi' => 'required',
<<<<<<< HEAD
            'metode' => 'required',
            'harga_perolehan' => 'required|numeric',
            'id_satuan' => 'required',
            'foto_aset' => 'required|image|max:2000',
            'id_supplier' => 'required',
            'no_faktur' => 'required|numeric',
            'id_departement' => 'required',
            'id_karyawan' => 'required',
            'umur' => 'required|numeric',
            'persentase' => 'required',
            'tarif' => 'required',    
        ], $messages);
   
        if ($validator->fails())
        {
            // return response()->json(['errors'=>$validator->errors()->all()]);
            return response()->json(['messages' => $validator->errors(), 'status' => 0]);
        }
        dd($request->file('foto_aset'));
=======
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
   

>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
        $requestData = $request->all();
        $fileName = time().$request->file('foto_aset')->getClientOriginalName();
        $path = $request->file('foto_aset')->storeAs('images', $fileName, 'public');
        $requestData["foto_aset"] = '/storage/'.$path;
<<<<<<< HEAD
        
         listAsset::create([
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'id_pelepasanstatus' => $request->id_pelepasanstatus,
            'id_grup' => $request->id_grup,
            'tgl_beli' => $request->tgl_beli,
            'tgl_pakai' => $request->tgl_pakai,
            'lokasi' => $request->lokasi,
            'metode' => $request->metode,
=======
            
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
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
            'harga_perolehan' => $request->harga_perolehan,
            'keterangan' => $request->keterangan,
            'id_satuan' => $request->id_satuan,
            'foto_aset' => $requestData["foto_aset"],
            'id_supplier' => $request->id_supplier,
            'no_faktur' => $request->no_faktur,
            'id_departement' => $request->id_departement,
            'id_karyawan' => $request->id_karyawan,
            'umur' => $request->umur,
<<<<<<< HEAD
            'persentase' => $request->persentase,
            'tarif' => $request->tarif,
        ]);
        Alert::success('Selamat', 'Data Berhasil Ditambahkan');
        return response()->json(['status' => 1]);
        // return redirect('listAsset')->with('success', 'Data Berhasil Disimpan!');
    }

    public function update(Request $request)
    {
        
        $requestData = $request->all();
        // $fileName = time().$request->file('editfoto_aset')->getClientOriginalName();
        // $path = $request->file('editfoto_aset')->storeAs('images', $fileName, 'public');
        // $requestData["editfoto_aset"] = '/storage/'.$path;
        if ($request->hasFile('editfoto_aset')) {
            $fileName = time().$request->file('editfoto_aset')->getClientOriginalName();
            $path = $request->file('editfoto_aset')->storeAs('images', $fileName, 'public');
            $requestData["editfoto_aset"] = '/storage/'.$path;
        }

        $messages = [
            'image' => ':Attribute harus berupa gambar',
            'required' => 'Kolom :attribute wajib diisi',
            'unique' => ':Attribute sudah ada', 
            'numeric' => ':Attribute harus berupa angka', 
            'tgl_pakai.after' => 'Tgl pakai harus setelah tgl beli' 
        ];
        
        $validator = Validator::make($request->all(), [
            'editnama_aset' => 'required|unique:list_asset,nama_aset,'.$request->editid_list_aset.',id_list_aset',
            'editkode_aset' => 'required|unique:list_asset,kode_aset,'.$request->editid_list_aset.',id_list_aset',
            'editid_grup' => 'required',
            'edittgl_beli' => 'required',
            'edittgl_pakai' => 'required|after:tgl_beli',
            'editlokasi' => 'required',
            'editharga_perolehan' => 'required|numeric',
            'editid_satuan' => 'required',
            'editfoto_aset' => 'required|image|max:2000',
            'editid_supplier' => 'required',
            'editno_faktur' => 'required|numeric',
            'editid_departement' => 'required',
            'editid_karyawan' => 'required',
            'editumur' => 'required|numeric',
            'editpersentase' => 'required',
            'edittarif' => 'required', 
        ], $messages);

        $validator->setAttributeNames([
            'editnama_aset' => 'nama aset',
            'editkode_aset' => 'kode aset',
            'editid_grup' => 'grup aset',
            'edittgl_beli' => 'tgl beli',
            'edittgl_pakai' => 'tgl pakai',
            'editlokasi' => 'lokasi',
            'editharga_perolehan' => 'harga perolehan',
            'editid_satuan' => 'satuan',
            'editfoto_aset' => 'foto aset',
            'editid_supplier' => 'supplier',
            'editno_faktur' => 'no faktur',
            'editid_departement' => 'departement',
            'editid_karyawan' => 'pic',
            'editumur' => 'umur',
            'editpersentase' => 'persentase',
            'edittarif' => 'tarif', 
=======
            // 'tarif' =>$request->tarif,
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
        ]);

        if ($validator->fails())
        {
            return response()->json(['messages' => $validator->errors(), 'status' => 0]);
        }
        $listassetOld = listAsset::findorfail($request->editid_list_aset);
        // dd($listassetOld);
        // print_r($listassetOld->);
        
        // ambil nilai sebelumnya
        $old_karyawan = $listassetOld->id_karyawan;
        $old_departement = $listassetOld->id_departement;
        $old_lokasi = $listassetOld->lokasi;

        $listasset = listAsset::findorfail($request->editid_list_aset);
        
        // dd($request);
        $listasset->update([
        'nama_aset' => $request->editnama_aset,
        'kode_aset' => $request->editkode_aset,
        'id_grup' => $request->editid_grup,
        'tgl_beli' => $request->edittgl_beli,
        'tgl_pakai' => $request->edittgl_pakai,
        'lokasi' => $request->editlokasi,
        'harga_perolehan' => $request->editharga_perolehan,
        'keterangan' => $request->editketerangan,
        'id_satuan' => $request->editid_satuan,
        'foto_aset' => $requestData["editfoto_aset"],
        'id_supplier' => $request->editid_supplier,
        'no_faktur' => $request->editno_faktur,
        'id_departement' => $request->editid_departement,
        'id_karyawan' => $request->editid_karyawan,
        'umur' => $request->editumur]);

        $perpindahan_asset = new perpindahanAsset;
        $is_changed = false;
        // dd($listassetOld->id_karyawan.'<br>'.$request->editid_karyawan);
        // dd($old_karyawan, $old_departement, $old_lokasi);
        // ubah nilai model jika perubahan dilakukan
        if ($listassetOld->id_karyawan != $request->editid_karyawan) {
            $is_changed = true;
            $listassetOld->id_karyawan = $request->editid_karyawan;
            // dd("idnya berubah");
        }
        if ($listassetOld->id_departement != $request->editid_departement) {
            $is_changed = true;
            $listassetOld->id_departement = $request->editid_departement;
            // dd("id departemennyanya berubah");
        }
        if ($listassetOld->lokasi != $request->editlokasi) {
            $is_changed = true;
            $listassetOld->lokasi = $request->editlokasi;
            // dd("lokasinya berubah");
        }
        // $listasset->update($requestData);
        // simpan data ke model dan catat perubahan jika ada
        if ($is_changed) {
        
            $perpindahan_asset->id_list_aset = $request->editid_list_aset;
            $perpindahan_asset->kode_aset = $request->editkode_aset;
            $perpindahan_asset->nama_aset = $request->editnama_aset;
        
            // simpan nilai sebelumnya
            $perpindahan_asset->id_karyawan_before = $old_karyawan;
            $perpindahan_asset->id_departement_before = $old_departement;
            $perpindahan_asset->lokasi_before = $old_lokasi;
        
            // simpan nilai setelahnya
            $loggedInUser = auth()->user();
            $perpindahan_asset->id_karyawan = $request->editid_karyawan;
            $perpindahan_asset->id_departement = $request->editid_departement;
            $perpindahan_asset->lokasi = $request->editlokasi;
            $perpindahan_asset->created_by = $loggedInUser->nama_karyawan;
            $perpindahan_asset->save();
        }

        Alert::success('Selamat', 'Data Berhasil Diupdate');
        return response()->json(['status' => 1]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perbaikan(Request $request)
    {  

            //  dd($requestData["foto_asetRusak"]);

            $messages = [
                'required' => 'Kolom :attribute wajib diisi',
                'unique' => ':Attribute sudah ada', 
                'numeric' => ':Attribute harus berupa angka', 
                'image' => ':Attribute harus berupa gambar',
            ];

            $validator = Validator::make($request->all(), [
                // 'id_pemeliharaan' => 'required|unique:group_asset',
                'tgl_kerusakan' => 'required',
                'keteranganRusak' => 'required',
                'foto_asetRusak' => 'required|image|max:2000',
                'tindakan' => 'required',
                'harga_perbaikan' => 'required|numeric',
            ], $messages);

            $validator->setAttributeNames([
                'keteranganRusak' => 'keterangan',
                'foto_asetRusak' => 'foto aset',
            ]);

            if ($validator->fails())
            {
                // return response()->json(['errors'=>$validator->errors()->all()]);
                return response()->json(['messages' => $validator->errors(), 'status' => 0]);
            }

                        $requestData = $request->all();
            $fileName = time().$request->file('foto_asetRusak')->getClientOriginalName();
            $path = $request->file('foto_asetRusak')->storeAs('images', $fileName, 'public');
            $requestData["foto_asetRusak"] = '/storage/'.$path;
            $loggedInUser = auth()->user();
            if ($request->filled('id_pemeliharaan')) {
                $requestData['updated_by'] = $loggedInUser->nama_karyawan;
            }
            // simpan nilai setelahnya

            $pemeliharaan_asset = pemeliharaanAsset::updateOrCreate(
                [
                    'id_pemeliharaan' => $request->id_pemeliharaan
                ],
                [
                    'id_list_aset' => $request->id_list_aset,
                    'kode_aset' => $request->kode_aset,
                    'nama_aset' => $request->nama_aset,
                    'tanggal_kerusakan' => $request->tgl_kerusakan,
                    'keterangan' => $request->keteranganRusak,
                    'foto_asetRusak' => $requestData["foto_asetRusak"],
                    'tindakan' => $request->tindakan,
                    'harga_perbaikan' => $request->harga_perbaikan,
                    'created_by' => $loggedInUser->nama_karyawan,

                    // tambahkan nilai 'updated_by' jika dalam mode update
                    'updated_by' => $requestData['updated_by'] ?? null,
                ]
            );
            
            $pemeliharaan_asset = pemeliharaanAsset::where('id_list_aset',$request->id_list_aset)->get();

            // dd($pemeliharaan_asset);
            // return redirect('kondisi')->with('success', 'Data Berhasil Disimpan!');
            // if ($pemeliharaan_asset->wasRecentlyCreated) {
            //     Alert::success('Selamat', 'Data Berhasil Ditambahkan');
            // } else {
            //     Alert::success('Selamat', 'Data Berhasil Diupdate');
            // }
            // return response()->json(['status' => 1]);
            return response()->json(['success'=>$pemeliharaan_asset, 'status' => 1]);
    }
    public function deletePerbaikan($id_pemeliharaan)
    {
        $pemeliharaan_asset = pemeliharaanAsset::findorfail($id_pemeliharaan);
        $data_lain = pemeliharaanAsset::where('id_pemeliharaan', '!=', $id_pemeliharaan)->get();

        // $pemeliharaanAsset = pemeliharaanAsset::where('id_list_aset',$id_list_aset)->first();
        if (!$pemeliharaan_asset) {
            return response()->json(['error' => 'Data tidak ditemukan']);
        }
        else {

            $pemeliharaan_asset->delete();
            return response()->json(['beres'=>$data_lain]);
        }
    }

   
    public function kondisi($id_list_aset)
    {

        $listasset = listAsset::select('list_asset.*')
        ->where('id_list_aset',$id_list_aset)
        ->get();

        $pemeliharaanAsset = pemeliharaanAsset::where('id_list_aset',$id_list_aset)->get();

        // $pemeliharaan_asset = pemeliharaan_asset::select('pemeliharaan_asset.*', 'list_asset.kode_aset', 'list_asset.nama_aset')
        // ->leftjoin('list_asset', 'pemeliharaan_asset.id_list_aset', '=', 'list_asset.id_list_aset')
        // ->where('id_list_aset',$id_list_aset)
        // ->get();
        
        return response()->json(['listAsset' => $listasset, 'pemeliharaanAsset' => $pemeliharaanAsset]);
        // return response()->json($pemeliharaan_asset);
    }

    public function log(Request $request)
    {
        $departement = DB::table('departement')->get()->toArray();
        $datakaryawan = DB::table('data_karyawan')->get()->toArray();
        $historyasset = DB::table('perpindahan_asset')
        ->leftjoin('list_asset','perpindahan_asset.id_list_aset','=','list_asset.id_list_aset')
        ->leftjoin('departement as departement_to','perpindahan_asset.id_departement','=','departement_to.id_departement')
        ->leftjoin('data_karyawan as data_karyawan_to','perpindahan_asset.id_karyawan','=','data_karyawan_to.id_karyawan')
        ->leftjoin('departement as departement_from','perpindahan_asset.id_departement_before','=','departement_from.id_departement')
        ->leftjoin('data_karyawan as data_karyawan_from','perpindahan_asset.id_karyawan_before','=','data_karyawan_from.id_karyawan')
        ->select('perpindahan_asset.*','list_asset.kode_aset', 'list_asset.nama_aset', 'departement_to.nama_departement', 'data_karyawan_to.nama_karyawan', 'departement_from.nama_departement as nama_departement_from', 'data_karyawan_from.nama_karyawan as nama_karyawan_from')
        ->where ('perpindahan_asset.id_list_aset', $request -> id_list_aset)->get()->toArray();
        return response()->json(['perpindahanAsset' => $historyasset, 'dataKaryawan' => $datakaryawan, 'departement' => $departement]);
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

    public function detail($id_list_aset)
    {
        $listasset = listAsset::select('list_asset.*', 'satuan.nama_satuan', 'supplier.nama_supplier', 'group_asset.nama_grup_aset', 'data_karyawan.nama_karyawan', 'departement.nama_departement')
        ->leftjoin('satuan', 'list_asset.id_satuan', '=', 'satuan.id_satuan')
        ->leftjoin('supplier', 'list_asset.id_supplier', '=', 'supplier.id_supplier')
        ->leftjoin('group_asset', 'list_asset.id_grup', '=', 'group_asset.id_grup')
        ->leftjoin('data_karyawan', 'list_asset.id_karyawan', '=', 'data_karyawan.id_karyawan')
        ->leftjoin('departement', 'list_asset.id_departement', '=', 'departement.id_departement')
        ->where('id_list_aset',$id_list_aset)
        ->get()->toArray();
        $qrcode = QrCode::size(100)->generate(route('generateView', $id_list_aset));
        
        // dd($listasset);
        
        // ->get();
        
        // $listasset = ;
        // dd($listasset);
        // $listasset = DB::table('listasset')->where('id_list_aset',$id)->get();
        return response()->json(["listAsset" => $listasset, "qrcode" => strval($qrcode)]);
        // , $satuan, $supplier, $groupasset, $datakaryawan
        // return response()->json(["listasset" => $listasset, "satuan" => $satuan, "supplier" => $supplier,"groupasset" => $groupasset, "datakaryawan" => $datakaryawan]);
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
<<<<<<< HEAD
    
=======
    public function update(Request $request)
    {
  
        $listasset = listAsset::findorfail($request->id_list_aset);
        $listasset->update($request->all());
        return redirect('listAsset')->with('success', 'Data Berhasil Diupdate!');
    }
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $hapusAsset = new reportPelepasan;
        $is_changed = false;
        $listasset = listAsset::findorfail($request->id_list_aset);
<<<<<<< HEAD
        if ($listasset->id_pelepasanstatus !== $request->id_pelepasanstatus) {
            $is_changed = true;
            $listasset->id_pelepasanstatus = $request->id_pelepasanstatus;
        }
        if ($is_changed) {
            // Ambil pengguna yang sedang login
            $loggedInUser = auth()->user();
            $hapusAsset->id_list_aset = $request->id_list_aset;
            $hapusAsset->id_pelepasanstatus = $request->id_pelepasanstatus;
            $hapusAsset->keterangan_hapus = $request->keterangan_hapus;
            $hapusAsset->created_by = $loggedInUser->nama_karyawan;
            $hapusAsset->save();
        }
    // tambahkan baris ini untuk mengupdate field id_pelepasanstatus
    $listasset->update( [
    'id_pelepasanstatus' => $request->id_pelepasanstatus,
   ]);

    return redirect('listAsset')->with('status', 'Data Berhasil Diupdate!');
        // $listasset = listAsset::findorfail($request->id_list_aset);
        // $listasset->update($request->all());
        // return redirect('listAsset')->with('status', 'Data Berhasil Diupdate!');
=======
        $listasset->update($request->all());
<<<<<<< HEAD
        return redirect('listAsset')->with('status', 'Data Berhasil Diupdate!');
=======
        return redirect('listAsset')->with('success', 'Data Berhasil Diupdate!');
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
    }

    public function generateqrcode($id_list_aset)
    {

        $listasset = listAsset::findorfail($id_list_aset);
        return view('halaman.qrcode', compact('listasset'));
    }
}
