<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\data_perusahaan;

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
        $users = data_perusahaan::all();
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
            'telp'=>'required',
            'email'=>'required',
            'PIC'=>'required',
        ]);

        $dp = new data_perusahaan(); // sesuai nama model ny
        // nama kolom di db = nama element di html
        $dp->divisi = $request->divisi;
        $dp->jenisVendor = $request->jenisVendor;
        $dp->jenisbrg_pekerjaan = $request->jenisbrg_pekerjaan;
        $dp->namaperusahaan = $request->namaperusahaan;
        $dp->almtperusahan = $request->almtperusahan;
        $dp->telp = $request->telp;
        $dp->email = $request->email;
        $dp->PIC = $request->PIC;

        $dp->save();

        // data_perusahaan::create($request->all());

        // ini buat arahin ke form selanjutnya
        return redirect('/persyaratan_umum')->with('status','Data berhasil Ditambahkan');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
