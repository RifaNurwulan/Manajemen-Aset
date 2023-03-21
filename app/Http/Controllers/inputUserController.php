<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\dataKaryawan;
use Illuminate\Support\Facades\Validator;
use Hash;

class inputUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')
        ->leftjoin('data_karyawan','users.id_karyawan', '=','data_karyawan.id_karyawan')
        ->select('users.*','data_karyawan.nama_karyawan')
        ->get();
        $user = DB::table('users')->get();
        $datakaryawan = DB::table('data_karyawan') ->get();
        return view('halaman.inputUser', compact( 'user', 'datakaryawan'));

        // $user= DB::table('users')->get();
        // //dd($departement);
        // return view('halaman.inputUser', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datakaryawan = DB::table('data_karyawan')->where('nama_karyawan') ->get();
        //dd($jabatan);
        return view('halaman.inputUser', compact('datakaryawan'));

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
            'email' => ':Attribute harus berupa alamat email yang valid', 
            'id_karyawan.required' => 'Kolom username wajib diisi', 
            'id_karyawan.unique' => 'Username sudah ada'
        ];

        $validator = Validator::make($request->all(), [
            'id_karyawan' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ], $messages);

        if ($validator->fails())
        {
            // return response()->json(['errors'=>$validator->errors()->all()]);
            return response()->json(['messages' => $validator->errors(), 'status' => 0]);
        }
        // dd($request->all());
        $nama_karyawan = dataKaryawan::findOrFail($request->id_karyawan)->nama_karyawan;

        // Ambil pengguna yang sedang login
        $user = auth()->user();

        User::create([
            'id_karyawan' => $request->id_karyawan,
            'nama_karyawan' => $nama_karyawan,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_by' => $user->nama_karyawan,
        ]);
    
        Alert::success('Selamat', 'Data Berhasil Ditambahkan');
        return response()->json(['status' => 1]);
        // return redirect('/inputuser')->with('success', 'Data Berhasil Disimpan!');
    }

    public function update(Request $request)
    {
        $messages = [
            'required' => 'Kolom :attribute wajib diisi',
            'unique' => ':Attribute sudah ada', 
            'email' => ':Attribute harus berupa alamat email yang valid', 
        ];
        
        $validator = Validator::make($request->all(), [
            'editemail' => 'required|email|unique:users,email,'.$request->editid.',id',
        ], $messages);

        $validator->setAttributeNames([
            'editemail' => 'email',
        ]);

        if ($validator->fails())
        {
            return response()->json(['messages' => $validator->errors(), 'status' => 0]);
        }
        // Ambil pengguna yang sedang login
        $loggedInUser = auth()->user();
        $user = User::findorfail($request->editid);
        $user->update([
            'email' => $request->editemail,
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
        //
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
    public function destroy(Request $request, User $user)
    {

        // Ambil pengguna yang sedang login
        $loggedInUser = auth()->user();

        // Hapus data dari tabel
        $user = User::findorfail($request->id);
        $user->update($request->all());

        // Tandai pengguna yang menghapus data
        $user->created_by = $loggedInUser->nama_karyawan;
        $user->save();

        return redirect('/inputuser')->with('success', 'Data Berhasil DiUpdate!');
    }
}
