<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class jabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = DB::table('jabatan')->get();
        //dd($departement);
        return view('halaman.jabatan', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman.jabatan');
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
        ];

        $validator = Validator::make($request->all(), [
            'kode_jabatan' => 'required|unique:jabatan',
            'desc_jabatan' => 'required|unique:jabatan',
        ], $messages);

        $validator->setAttributeNames([
            'editkode_jabatan' => 'Kode jabatan',
            'desc_jabatan' => 'nama jabatan'
=======
        $request->validate([
            'kode_jabatan' => 'required',
            'desc_jabatan' => 'required',
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
        ]);

        if ($validator->fails())
        {
            // return response()->json(['errors'=>$validator->errors()->all()]);
            return response()->json(['messages' => $validator->errors(), 'status' => 0]);
        }

        // dd($request->all());
        // Ambil pengguna yang sedang login
        $user = auth()->user();

        jabatan::create([
            'kode_jabatan' => $request->kode_jabatan,
            'desc_jabatan' => $request->desc_jabatan,
<<<<<<< HEAD
            'created_by' => $user->nama_karyawan,
        ]);
        Alert::success('Selamat', 'Data Berhasil Ditambahkan');
        return response()->json(['status' => 1]);
        // return redirect('jabatan')->with('success', 'Data Berhasil Disimpan!');
    }

    public function update(Request $request)
    {
        $messages = [
            'required' => 'Kolom :attribute wajib diisi',
            'unique' => ':Attribute sudah ada',
        ];
        
        $validator = Validator::make($request->all(), [
            'editkode_jabatan' => 'required|unique:jabatan,kode_jabatan,'.$request->editid_jabatan.',id_jabatan',
            'editdesc_jabatan' => 'required|unique:jabatan,desc_jabatan,'.$request->editid_jabatan.',id_jabatan',
        ], $messages);

        $validator->setAttributeNames([
            'editkode_jabatan' => 'kode jabatan',
            'editdesc_jabatan' => 'nama jabatan'
=======
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
        ]);

        if ($validator->fails())
        {
            return response()->json(['messages' => $validator->errors(), 'status' => 0]);
        }
        // Ambil pengguna yang sedang login
        $loggedInUser = auth()->user();
        $jabatan = jabatan::findorfail($request->editid_jabatan);
        $jabatan->update([
            'kode_jabatan' => $request->editkode_jabatan,
            'desc_jabatan' => $request->editdesc_jabatan,
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
        $jabatan = jabatan::findorfail($id);
        return view('halaman.jabatan', compact('jabatan'));
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
        // $jabatan = jabatan::findorfail($id_jabatan);
        // $jabatan->delete();
        // Ambil pengguna yang sedang login
        $loggedInUser = auth()->user();
        $jabatan = jabatan::findorfail($request->id_jabatan);
        $jabatan->update($request->all());

        // Tandai pengguna yang menghapus data
        $jabatan->updated_by = $loggedInUser->nama_karyawan;
        $jabatan->save();
        Alert::success('Selamat', 'Data Berhasil Diupdate');
        return redirect('jabatan');
    }
}
