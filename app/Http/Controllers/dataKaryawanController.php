<?php

namespace App\Http\Controllers;

use App\Models\jabatan;
use App\Models\dataKaryawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $datakaryawan = DB::table('data_karyawan')
            ->where('nama_karyawan', 'like', "%" . $search . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('halaman.dataKaryawan', ['dataKaryawan' =>  $datakaryawan]);
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
        $request->validate([
            'nama_karyawan' => 'required',
            'nik' => 'required',
            'id_jabatan' => 'required',
        ]);

        //dd($request->all());

        dataKaryawan::create([
            'nama_karyawan' => $request->nama_karyawan,
            'nik' => $request->nik,
            'id_jabatan' => $request->id_jabatan,
        ]);

        return redirect('dataKaryawan')->with('success', 'Data Berhasil Disimpan!');
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
    public function update(Request $request)
    {
        $datakaryawan = dataKaryawan::findorfail($request->id_karyawan);
        $datakaryawan->update($request->all());
        return redirect('dataKaryawan')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // $datakaryawan = dataKaryawan::findorfail($id_karyawan);
        // $datakaryawan->delete();
        $datakaryawan = dataKaryawan::findorfail($request->id_karyawan);
        $datakaryawan->update($request->all());
        return redirect('dataKaryawan')->with('status', 'Data Berhasil Diupdate!');
    }
}
