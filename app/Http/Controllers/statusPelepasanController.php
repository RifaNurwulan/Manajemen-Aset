<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\statusPelepasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class statusPelepasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = DB::table('pelepasanstatus_asset')->get();
        //dd($departement);
        return view('halaman.statusPelepasanAsset', compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman.statusPelepasanAsset');
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
            'desc_pelepasanstatus.required' => 'Kolom nama status wajib diisi',
            'desc_pelepasanstatus.unique' => 'Nama status sudah ada'
        ];

        $validator = Validator::make($request->all(), [
            'desc_pelepasanstatus' => 'required|unique:pelepasanstatus_asset',
        ], $messages);

        if ($validator->fails())
        {
            // return response()->json(['errors'=>$validator->errors()->all()]);
            return response()->json(['messages' => $validator->errors(), 'status' => 0]);
        }
        // dd($request->all());

        // Ambil pengguna yang sedang login
        $user = auth()->user();
        statusPelepasan::create([
            'desc_pelepasanstatus' => $request->desc_pelepasanstatus,
            'created_by' => $user->nama_karyawan,
        ]);
        Alert::success('Selamat', 'Data Berhasil Ditambahkan');
        return response()->json(['status' => 1]);
        // return redirect('pelepasanAsset')->with('success', 'Data Berhasil Disimpan!');
    }

    public function update(Request $request)
    {
        $messages = [
            'required' => 'Kolom :attribute wajib diisi',
            'unique' => ':Attribute sudah ada',
        ];
        
        $validator = Validator::make($request->all(), [
            'editdesc_pelepasanstatus' => 'required|unique:pelepasanstatus_asset,desc_pelepasanstatus,'.$request->editid_pelepasanstatus.',id_pelepasanstatus',
        ], $messages);

        $validator->setAttributeNames([
            'editdesc_pelepasanstatus' => 'nama status',
        ]);

        if ($validator->fails())
        {
            return response()->json(['messages' => $validator->errors(), 'status' => 0]);
        }

        // Ambil pengguna yang sedang login
        $loggedInUser = auth()->user();
        $status = statusPelepasan::findorfail($request->editid_pelepasanstatus);
        $status->update([
            'desc_pelepasanstatus' => $request->editdesc_pelepasanstatus,
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
    // public function destroy($id_pelepasanstatus)
    // {
    //     $status = statusPelepasan::findorfail($id_pelepasanstatus);
    //     $status->delete();
    //     Alert::success('Selamat', 'Data Berhasil Dihapus');
    //     // $jabatan = jabatan::findorfail($request->id_jabatan);
    //     // $jabatan->update($request->all());
    //     return redirect('pelepasanAsset');
    // }

    public function destroy(Request $request)
    {
        // Ambil pengguna yang sedang login
        $loggedInUser = auth()->user();
        $status = statusPelepasan::findorfail($request->id_pelepasanstatus);
        $status->update($request->all());

        // Tandai pengguna yang menghapus data
        $status->updated_by = $loggedInUser->nama_karyawan;
        $status->save();
        Alert::success('Selamat', 'Data Berhasil Diupdate');
        return redirect('pelepasanAsset');
    }
}
