<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class satuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $satuan = satuan::paginate(10);
        return view('halaman.satuan', compact('satuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman.satuan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Kolom :attribute wajib diisi',
            'unique' => ':Attribute sudah ada', 
        ];

        $validator = Validator::make($request->all(), [
            'kode_satuan' => 'required|unique:satuan',
            'nama_satuan' => 'required|unique:satuan',
        ], $messages);

        if ($validator->fails())
        {
            // return response()->json(['errors'=>$validator->errors()->all()]);
            return response()->json(['messages' => $validator->errors(), 'status' => 0]);
        }

        // dd($request->all());

        // Ambil pengguna yang sedang login
        $user = auth()->user();

        satuan::create([
            'kode_satuan' => $request->kode_satuan,
            'nama_satuan' => $request->nama_satuan,
            'created_by' => $user->nama_karyawan,
        ]);

        Alert::success('Selamat', 'Data Berhasil Ditambahkan');
        return response()->json(['status' => 1]);
        // return redirect('groupAsset')->with('success', 'Data Berhasil Disimpan!');
    }

    public function update(Request $request)
    {
        $messages = [
            'required' => 'Kolom :attribute wajib diisi',
            'unique' => ':Attribute sudah ada',
        ];
        
        $validator = Validator::make($request->all(), [
            'editkode_satuan' => 'required|unique:satuan,kode_satuan,'.$request->editid_satuan.',id_satuan',
            'editnama_satuan' => 'required|unique:satuan,nama_satuan,'.$request->editid_satuan.',id_satuan',
        ], $messages);

        $validator->setAttributeNames([
            'editkode_satuan' => 'kode satuan',
            'editnama_satuan' => 'nama satuan'
        ]);

        if ($validator->fails())
        {
            return response()->json(['messages' => $validator->errors(), 'status' => 0]);
        }
        // Ambil pengguna yang sedang login
        $loggedInUser = auth()->user();
        $satuan = satuan::findorfail($request->editid_satuan);
        $satuan->update([
            'kode_satuan' => $request->editkode_satuan,
            'nama_satuan' => $request->editnama_satuan,
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
        $satuan = satuan::findorfail($id);
        return view('halaman.satuan', compact('satuan'));
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
        $satuan = satuan::findorfail($request->id_satuan);
        $satuan->update($request->all());

        // Tandai pengguna yang menghapus data
        $satuan->updated_by = $loggedInUser->nama_karyawan;
        $satuan->save();
        Alert::success('Selamat', 'Data Berhasil Diupdate');
        return redirect('satuan');
    }
}
