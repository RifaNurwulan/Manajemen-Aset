<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class supplierController extends Controller
{
    public function index()
    {
        $supplier = DB::table('supplier')->get();
        // dd($supplier);
        return view('halaman.supplier', compact('supplier'));
    }

    public function search(Request $request)
    {
        // menangkap data pencarian
        $search = $request->search;

        // mengambil data dari table supplier sesuai pencarian data
        $supplier = DB::table('supplier')
            ->where('nama_supplier', 'like', "%" . $search . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('halaman.supplier', ['supplier' => $supplier]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman.supplier');
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
            'numeric' => ':Attribute harus berupa angka', 
            'email' => ':Attribute harus berupa alamat email yang valid', 
        ];
        
        $validator = Validator::make($request->all(), [
            'nama_supplier' => 'required|unique:supplier',
            'alamat' => 'required',
            'kota' => 'required',
            'pic' => 'required',
            'telp' => 'required|numeric',
            'mobile_phone' => 'required|numeric',
            'fax' => 'required|numeric',
            'email' => 'required|email|unique:supplier',
        ], $messages);

        if ($validator->fails())
        {
            // return response()->json(['errors'=>$validator->errors()->all()]);
            return response()->json(['messages' => $validator->errors(), 'status' => 0]);
        }
        //dd($request->all());

        // Ambil pengguna yang sedang login
        $user = auth()->user();

        supplier::create([
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'pic' => $request->pic,
            'telp' => $request->telp,
            'mobile_phone' => $request->mobile_phone,
            'fax' => $request->fax,
            'email' => $request->email,
            'keterangan' => $request->keterangan,
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
            'numeric' => ':Attribute harus berupa angka', 
            'email' => ':Attribute harus berupa alamat email yang valid', 
        ];
        
        $validator = Validator::make($request->all(), [
            'editnama_supplier' => 'required|unique:supplier,nama_supplier,'.$request->editid_supplier.',id_supplier',
            'editalamat' => 'required',
            'editkota' => 'required',
            'editpic' => 'required',
            'edittelp' => 'required|numeric',
            'editmobile_phone' => 'required|numeric',
            'editfax' => 'required|numeric',
            'editemail' => 'required|email|unique:supplier,email,'.$request->editid_supplier.',id_supplier',
        ], $messages);

        $validator->setAttributeNames([
            'editnama_supplier' => 'nama supplier',
            'editalamat' => 'alamat',
            'editkota' => 'kota',
            'editpic' => 'pic',
            'edittelp' => 'telp',
            'editmobile_phone' => 'mobile phone',
            'editfax' => 'fax',
            'editemail' => 'email'
        ]);

        if ($validator->fails())
        {
            return response()->json(['messages' => $validator->errors(), 'status' => 0]);
        }
        // Ambil pengguna yang sedang login
        $loggedInUser = auth()->user();
        $supplier = supplier::findorfail($request->editid_supplier);
        $supplier->update([
            'nama_supplier' => $request->editnama_supplier,
            'alamat' => $request->editalamat,
            'kota' => $request->editkota,
            'pic' => $request->editpic,
            'telp' => $request->edittelp,
            'mobile_phone' => $request->editmobile_phone,
            'fax' => $request->editfax,
            'email' => $request->editemail,
            'keterangan' => $request->editketerangan,
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
        $supplier = supplier::findorfail($id);
        return view('halaman.supplier',compact('supplier'));
        // return redirect('supplier')->with('success', 'Data Berhasil Diupdate!');
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
        $supplier = supplier::findorfail($request->id_supplier);
        $supplier->update($request->all());

        // Tandai pengguna yang menghapus data
        $groupasset->updated_by = $loggedInUser->nama_karyawan;
        $groupasset->save();
        Alert::success('Selamat', 'Data Berhasil Diupdate');
        return redirect('supplier');
    }
}
