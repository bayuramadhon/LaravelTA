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
            'Tanda_Daftar_Perusahaan'=>'required',
            'TDPMul'=>'required',
            'TDPSel'=>'required',
            'FileTDP'=>'required',
            'FileSPKD'=>'required',
            'Lama_Perusahaandiri'=>'required',
            'Lama_perusahaan_kerjsama_PP'=>'required',
            'Sertifkalibrasi'=>'required',
        ]);

        $no_skd = $request->SKD;
        $file_sdom= '';
        if($request->hasFile('FileSDOM')){
            $file = $request->file('FileSDOM');
            $file_sdom = "sdom_" . $no_skd . "_" . $file->getClientOriginalName();
            $file->move('file',$file_sdom);
        }
        $file_spmr= '';
        if($request->hasFile('FileSpmr')){
            $file = $request->file('FileSpmr');
            $file_spmr = "spmr_" . $no_skd . "_" .$file->getClientOriginalName();
            $file->move('file',$file_spmr);
        }
        $file_tdp= '';
        if($request->hasFile('FileTDP')){
            $file = $request->file('FileTDP');
            $file_tdp = "tdp_" . $no_skd . "_" .$file->getClientOriginalName();
            $file->move('file',$file_tdp);
        }
        $file_skpd= '';
        if($request->hasFile('FileSPKD')){
            $file = $request->file('FileSPKD');
            $file_skpd = "skpd_" . $no_skd . "_" .$file->getClientOriginalName();
            $file->move('file',$file_skpd);
        }
        $file_sertifkalibrasi= '';
        if($request->hasFile('Sertifkalibrasi')){
            $file = $request->file('Sertifkalibrasi');
            $file_sertifkalibrasi = "sfk_" . $no_skd . "_" .$file->getClientOriginalName();
            $file->move('file',$file_sertifkalibrasi);
        }

        $pu = new persyaratanumum();

        $pu->Skd_No = $request->SKD;
        $pu->Tgl_Dom_Mul = $request->Tanggal_mulai_domisili;
        $pu->Tgl_Dom_Sel = $request->Tanggal_Selesai_Domisili;
        $pu->File_SDOM = $file_sdom;
        $pu->File_Spmr = $file_spmr;
        $pu->Tdp_no = $request->Tanda_Daftar_Perusahaan;
        $pu->Tgl_Tdp_Mul = $request->TDPMul;
        $pu->Tgl_Tdp_Sel = $request->TDPSel;
        $pu->File_Tdp = $file_tdp;
        $pu->File_Spkd = $file_skpd;
        $pu->lama_perushndirikan = $request->Lama_Perusahaandiri;
        $pu->lamaprshn_krjsamapp = $request->Lama_perusahaan_kerjsama_PP;
        $pu->File_srtifktkalibrasi= $file_sertifkalibrasi;

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
