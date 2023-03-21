<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\groupAsset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class GroupAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupasset = DB::table('group_asset')->get();
        //dd($groupasset);
        return view('halaman.groupAsset', compact('groupasset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman.groupAsset');
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
            'kode_grup' => 'required|unique:group_asset',
            'nama_grup_aset' => 'required|unique:group_asset',
        ], $messages);
        
        if ($validator->fails())
        {
            // return response()->json(['errors'=>$validator->errors()->all()]);
            return response()->json(['messages' => $validator->errors(), 'status' => 0]);
        }
        // dd($request);

        //dd($request->all());

        // Ambil pengguna yang sedang login
        $user = auth()->user();

        groupAsset::create([
            'kode_grup' => $request->kode_grup,
            'nama_grup_aset' => $request->nama_grup_aset,
            'created_by' => $user->nama_karyawan,
            // 'tipe_depresiasi' => $request->tipe_depresiasi,
            // 'tahun' => $request->tahun,
            // 'depresiasi' => $request->depresiasi,
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
            'editkode_grup' => 'required|unique:group_asset,kode_grup,'.$request->editid_grup.',id_grup',
            'editnama_grup_aset' => 'required|unique:group_asset,nama_grup_aset,'.$request->editid_grup.',id_grup',
        ], $messages);

        $validator->setAttributeNames([
            'editnama_grup_aset' => 'nama grup aset',
            'editkode_grup' => 'kode grup'
        ]);

        if ($validator->fails())
        {
            return response()->json(['messages' => $validator->errors(), 'status' => 0]);
        }
        // Ambil pengguna yang sedang login
        $loggedInUser = auth()->user();
        $groupasset = groupAsset::findorfail($request->editid_grup);
        $groupasset->update([
            'kode_grup' => $request->editkode_grup,
            'nama_grup_aset' => $request->editnama_grup_aset,
            'updated_by' => $loggedInUser->nama_karyawan
        ]);
        // return redirect('groupAsset')->with('success', 'Data Berhasil Diupdate!');
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
        $groupasset = groupAsset::findorfail($id);
        return view('halaman.groupAsset', compact('groupasset'));
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
        // $groupasset = groupAsset::findorfail($id_grup);
        //$groupasset->delete();
        // Ambil pengguna yang sedang login
        $loggedInUser = auth()->user();
        $groupasset = groupAsset::findorfail($request->id_grup);
        $groupasset->update($request->all());

        // Tandai pengguna yang menghapus data
        $groupasset->updated_by = $loggedInUser->nama_karyawan;
        $groupasset->save();
        Alert::success('Selamat', 'Data Berhasil Diupdate');
        return redirect('groupAsset');
    }
}
