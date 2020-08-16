<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\data_perusahaan;
use App\persyaratanumum;
use App\keupajak;
use App\akteperu;
use App\QSHE;
use Auth;

class dataperusahaan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = DB::table('data_perusahaan')->get();
        $user = Auth::user();
        $user_id = $user->id;
        $is_admin = $user->is_admin;
        $users = [];
        if ($is_admin) {
            $users = data_perusahaan::all();
        } else {
            $users = data_perusahaan::where('user_id', $user_id)->get();
        }
        return view('Datavendor.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //cara 1
        // $user = new User;
        // $user->divisi = $request->divisi;
        // $user->jenisVendor = $request->jenisVendor;
        // $user->jenisbrg/pekerjaan = $request->jenisbrg/pekerjaan;
        // $user->namaperusahaan = $request->namaperusahaan;
        // $user->almtperusahaan = $request->almtperusahaan;
        // $user->telp = $request->telp;
        // $user->email = $request->email;
        // $user->PIC = $request->PIC;

        // cara 2 field dan nama texfield html
        // data_perusahaan::create([
        //     'divisi'=> $request->divisi,
        //     'jenisVendor'=> $request->jenisVendor,
        //     'jenisbrg_pekerjaan'=> $request->jenisbrg_pekerjaan,
        //     'namaperusahaan'=> $request->namaperusahaan,
        //     'almtperusahaan'=> $request->almtperusahaan,
        //     'telp'=> $request->telp,
        //     'email'=> $request->email,
        //     'PIC'=> $request->PIC,
        // ]);

        // validasi input data perusahaan
        $request->validate([
            'divisi'=>'required',
            'jenisVendor'=>'required',
            'jenisbrg_pekerjaan'=>'required',
            'namaperusahaan'=>'required',
            'almtperusahan'=>'required',
            'telepon'=>'required',
            'email'=>'required',
            'PIC'=>'required',
        ]);

        $user = Auth::user();
        $dp = new data_perusahaan(); // sesuai nama model ny
        // nama kolom di db = nama element di html
        $dp->user_id = $user->id;
        $dp->divisi = $request->divisi;
        $dp->jenisVendor = $request->jenisVendor;
        $dp->jenisbrg_pekerjaan = $request->jenisbrg_pekerjaan;
        $dp->namaperusahaan = $request->namaperusahaan;
        $dp->almtperusahan = $request->almtperusahan;
        $dp->telp = $request->telepon;
        $dp->email = $request->email;
        $dp->PIC = $request->PIC;

        $dp->save();
        $id_perusahaan = $dp->id;

        // data_perusahaan::create($request->all());

        // ini buat arahin ke form selanjutnya
        return redirect('/persyaratan_umum/' . $id_perusahaan)->with('status','Data berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dp = data_perusahaan::whereId($id)->firstOrFail();
        return view('Datavendor.edit_dp', compact('dp'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'divisi'=>'required',
            'jenisVendor'=>'required',
            'jenisbrg_pekerjaan'=>'required',
            'namaperusahaan'=>'required',
            'almtperusahan'=>'required',
            'telepon'=>'required',
            'email'=>'required',
            'PIC'=>'required',
        ]);
        $dp = data_perusahaan::whereId($id)->firstOrFail();
        $dp->divisi = $request->divisi;
        $dp->jenisVendor = $request->jenisVendor;
        $dp->jenisbrg_pekerjaan = $request->jenisbrg_pekerjaan;
        $dp->namaperusahaan = $request->namaperusahaan;
        $dp->almtperusahan = $request->almtperusahan;
        $dp->telp = $request->telepon;
        $dp->email = $request->email;
        $dp->PIC = $request->PIC;

        $dp->save();
        $id;
        return redirect('/persyaratan_umum/edit/' . $id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dp = data_perusahaan::whereId($id)->firstOrFail();
        $dp->delete();
        $pu = persyaratanumum::where('id_perusahaan',$id)->firstOrFail();
        $pu->delete();
        $kp = keupajak::where('id_perusahaan',$id)->firstOrFail();
        $kp->delete();
        $ap = akteperu::where('id_perusahaan',$id)->firstOrFail();
        $ap->delete();
        $qs = QSHE::where('id_perusahaan',$id)->firstOrFail();
        $qs->delete();
        return redirect('/Dataprocurement')->with('status', 'Data berhasil dihapus');
    }
}
