<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class departementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departement = DB::table('departement')->get();
        //dd($departement);
        return view('halaman.departement', compact('departement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman.departement');
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
            'kode_departement' => 'required|unique:departement',
            'nama_departement' => 'required|unique:departement',
            'singkatan' => 'required|unique:departement',
        ], $messages);

        if ($validator->fails())
        {
            // return response()->json(['errors'=>$validator->errors()->all()]);
            return response()->json(['messages' => $validator->errors(), 'status' => 0]);
        }
        // dd($request->all());
        // Ambil pengguna yang sedang login
        $user = auth()->user();

        departement::create([
            'kode_departement' => $request->kode_departement,
            'nama_departement' => $request->nama_departement,
            'singkatan' => $request->singkatan,
            'created_by' => $user->nama_karyawan,
        ]);
        Alert::success('Selamat', 'Data Berhasil Ditambahkan');
        return response()->json(['status' => 1]);
        // return redirect('departement')->with('success', 'Data Berhasil Disimpan!');
    }

    public function update(Request $request)
    {
        $messages = [
            'required' => 'Kolom :attribute wajib diisi',
            'unique' => ':Attribute sudah ada',
        ];

        $validator = Validator::make($request->all(), [
            'editkode_departement' => 'required|unique:departement,kode_departement,'.$request->editid_departement.',id_departement',
            'editnama_departement' => 'required|unique:departement,nama_departement,'.$request->editid_departement.',id_departement',
            'editsingkatan' => 'required|unique:departement,singkatan,'.$request->editid_departement.',id_departement',
        ], $messages);

        $validator->setAttributeNames([
            'editkode_departement' => 'kode departement',
            'editnama_departement' => 'nama departement',
            'editsingkatan' => 'singkatan'
        ]);

        if ($validator->fails())
        {
            return response()->json(['messages' => $validator->errors(), 'status' => 0]);
        }
        // Ambil pengguna yang sedang login
        $loggedInUser = auth()->user();
        $departement = departement::findorfail($request->editid_departement);
        $departement->update([
            'kode_departement' => $request->editkode_departement,
            'nama_departement' => $request->editnama_departement,
            'singkatan' => $request->editsingkatan,
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
        $departement = departement::findorfail($id);
        return view('halaman.departement',compact('departement'));
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
        $departement = departement::findorfail($request->id_departement);
        $departement->update($request->all());
        $departement->updated_by = $loggedInUser->nama_karyawan;
        $departement->save();
        Alert::success('Selamat', 'Data Berhasil Diupdate');
        return redirect('departement');
    }
}
