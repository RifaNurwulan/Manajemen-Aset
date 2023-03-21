<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\jabatan;
use App\Models\dataKaryawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class dataKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datakaryawan = DB::table('data_karyawan')
        ->leftjoin('jabatan','data_karyawan.id_jabatan','=','jabatan.id_jabatan')
        ->select('data_karyawan.*','jabatan.desc_jabatan')
        ->get();
        $jabatan = DB::table('jabatan')->where('status_jabatan','=','1')->get();
        $kode = $this->kode();
        // dd($kode);
        //dd($datakaryawan);
        return view('halaman.dataKaryawan', compact('datakaryawan', 'jabatan', 'kode'));
    }

    public function kode(){
        $datakaryawan = DB::table('data_karyawan')->orderBy('id_karyawan','desc')->limit(1)->get()->toArray();
        // $this->db->select('RIGHT(barang.kode_barang,2) as kode_barang', FALSE);
        // $this->db->order_by('kode_barang','DESC');    
        // $datakaryawan->get('nik');    
        // $query = $datakaryawan->latest(); 
        //dd(); //cek dulu apakah ada sudah ada kode di tabel.    
        if(count($datakaryawan) <> 0){      
            //cek kode jika telah tersedia  
            foreach ($datakaryawan as $key => $value) {
                # code...  
                $data = $value->nik;      
            }
            //  $batas = str_pad(12, 3, "0", STR_PAD_LEFT);   
            $kodeTemp = intval($data) + 1; 
            $newKodeString = substr($kodeTemp, -3);
            $kode = intval($newKodeString);
            // dd($kode);

        }
        else{      
             $kode = 1;  //cek jika kode belum terdapat pada table
        }
            $tgl=date('mY'); 
            $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
            $kodetampil = $tgl.$batas;  //format kode
            return $kodetampil;  
       }

    public function search(Request $request)
    {
        // menangkap data pencarian
        $search = $request->search;

        // mengambil data dari table dataKaryawan sesuai pencarian data
        $jabatan = DB::table('jabatan')->get();
        $datakaryawan = DB::table('data_karyawan')
        ->leftjoin('jabatan','data_karyawan.id_jabatan','=','jabatan.id_jabatan')
        ->select('data_karyawan.*','jabatan.desc_jabatan')
            ->where('nama_karyawan', 'like', "%" . $search . "%")
            ->paginate();
            $kode = $this->kode();
        // mengirim data pegawai ke view index
        return view('halaman.dataKaryawan', ['datakaryawan' =>  $datakaryawan, 'jabatan' =>  $jabatan,  'kode' =>  $kode]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = DB::table('jabatan')->where('status_jabatan','=','1');
        //dd($jabatan);
        return view('halaman.dataKaryawan', compact('jabatan'));
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
            'required' => 'Kolom :attribute wajib diisi',
            'unique' => ':Attribute sudah ada',
            'id_jabatan.required' => 'Kolom jabatan wajib diisi' 
        ];
         //define validation rules
         $validator = Validator::make($request->all(), [
            'nama_karyawan' => 'required|unique:data_karyawan',
            'nik' => 'required|unique:data_karyawan',
            'id_jabatan' => 'required',
        ], $messages);
=======
        $request->validate([
            'nama_karyawan' => 'required',
            'nik' => 'required',
            'id_jabatan' => 'required',
        ]);
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc

        //check if validation fails
        if ($validator->fails())
        {
            // return response()->json(['errors'=>$validator->errors()->all()]);
            return response()->json(['messages' => $validator->errors(), 'status' => 0]);
        }

        // dd($request->all());
        // Ambil pengguna yang sedang login
        $user = auth()->user();

        dataKaryawan::create([
            'nama_karyawan' => $request->nama_karyawan,
            'nik' => $request->nik,
            'id_jabatan' => $request->id_jabatan,
<<<<<<< HEAD
            'created_by' => $user->nama_karyawan,
        ]);
        Alert::success('Selamat', 'Data Berhasil Ditambahkan');
        return response()->json(['status' => 1]);
        // return redirect('dataKaryawan')->with('success', 'Data Berhasil Disimpan!');
    }

    public function update(Request $request)
    {
        $messages = [
            'required' => 'Kolom :attribute wajib diisi',
            'unique' => ':Attribute sudah ada',
        ];
        
        $validator = Validator::make($request->all(), [
            'editnama_karyawan' => 'required|unique:data_karyawan,nama_karyawan,'.$request->editid_karyawan.',id_karyawan',
            'editnik' => 'required|unique:data_karyawan,nik,'.$request->editid_karyawan.',id_karyawan',
            'editid_jabatan' => 'required'
        ], $messages);

        $validator->setAttributeNames([
            'editnama_karyawan' => 'nama karyawan',
            'editnik' => 'nik',
            'editid_jabatan' => 'jabatan'
=======
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
        ]);

        if ($validator->fails())
        {
            return response()->json(['messages' => $validator->errors(), 'status' => 0]);
        }
        // Ambil pengguna yang sedang login
        $loggedInUser = auth()->user();
        $datakaryawan = dataKaryawan::findorfail($request->editid_karyawan);
        $datakaryawan->update([
            'nama_karyawan' => $request->editnama_karyawan,
            'nik' => $request->editnik,
            'id_jabatan' => $request->editid_jabatan,
            'updated_by' => $loggedInUser->nama_karyawan
        ]);
        Alert::success('Selamat', 'Data Berhasil Diupdate');
        return response()->json(['status' => 1]);
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
        $datakaryawan = dataKaryawan::findorfail($id);
        return view('halaman.dataKaryawan', compact('datakaryawan'));
    }

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
    public function destroy(Request $request)
    {
        // Ambil pengguna yang sedang login
        $loggedInUser = auth()->user();
        $datakaryawan = dataKaryawan::findorfail($request->id_karyawan);
        $datakaryawan->update($request->all());

        // Tandai pengguna yang menghapus data
        $datakaryawan->updated_by = $loggedInUser->nama_karyawan;
        $datakaryawan->save();
        Alert::success('Selamat', 'Data Berhasil Diupdate');
        return redirect('dataKaryawan');
    }

}
