<?php

namespace App\Http\Controllers;

use App\persyaratanumum;
use Illuminate\Http\Request;


class persyaratanumumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
        $request->validate([
            'SKD'=>'required',
            'Tanggal_mulai_domisili'=>'required',
            'Tanggal_Selesai_Domisili'=>'required',
            'FileSDOM'=>'required',
            'FileSpmr'=>'required',
            'Fileocpqrs'=>'required',
            'Tanda_Daftar_Perusahaan'=>'required',
            'TDPMul'=>'required',
            'TDPSel'=>'required',
            'FileTDP'=>'required',
            'FileSPKD'=>'required',
            'Lama_Perusahaandiri'=>'required',
            'Lama_perusahaan_kerjsama_PP'=>'required',
            'File_prykdgnpp'=>'required',
            'Sertifkalibrasi'=>'required',
        ]);

        $file_upload= '';
        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $file_upload = $request->get('code') . '.'. $file->getClientOrigins();
            $file->move('Admin',$file_name);
        }

        $pu = new persyaratanumum();

        $pu->Skd_No = $request->SKD;
        $pu->Tgl_Dom_Mul = $request->Tanggal_mulai_domisili;
        $pu->Tgl_Dom_Sel = $request->Tanggal_Selesai_Domisili;
        $pu->FileSDOM = $request->picture;
        $pu->FileSpmr = $request->FileSpmr;
        $pu->Tdp_no = $request->Tanda_Daftar_Perusahaan;
        $pu->Tgl_Tdp_Mul = $request->TDPMul;
        $pu->Tgl_Tdp_Sel = $request->TDPSel;
        $pu->FileTDP = $request->FileTDP;
        $pu->FileSPKD = $request->FileSPKD;
        $pu->lama_perushndirikan = $request->Lama_Perusahaandiri;
        $pu->lamaprshn_krjasamapp = $request->Lama_perusahaan_kerjsama_PP;
        $pu->Sertifkalibrasi= $request->Sertifkalibrasi;

        $pu->save();

        return redirect('/keuanganpajak')->with('status','Data berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\persyaratanumum  $persyaratanumum
     * @return \Illuminate\Http\Response
     */
    public function show(persyaratanumum $persyaratanumum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\persyaratanumum  $persyaratanumum
     * @return \Illuminate\Http\Response
     */
    public function edit(persyaratanumum $persyaratanumum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\persyaratanumum  $persyaratanumum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, persyaratanumum $persyaratanumum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\persyaratanumum  $persyaratanumum
     * @return \Illuminate\Http\Response
     */
    public function destroy(persyaratanumum $persyaratanumum)
    {
        //
    }
}
