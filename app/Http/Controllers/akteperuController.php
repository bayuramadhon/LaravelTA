<?php

namespace App\Http\Controllers;

use App\akteperu;
use Illuminate\Http\Request;

class akteperuController extends Controller
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
    public function store(Request $request, $id_perusahaan)
    {
        $request->validate([
            'APP'=>'required',
            'Bank'=>'required',
            'Rek'=>'required',
            'FileAkte'=>'required',
            'FilePngshan'=>'required',
            'APT'=>'required',
            'Tgl_Apt'=>'required',
            'FileApt'=>'required',
            'Tgl_Direksi'=>'required',
            'FileKTP'=>'required',
            'FileSKM'=>'required',
            'FileSp'=>'required',
        ]);

        $no_app = $request->APP;
        $file_akte= '';
        if($request->hasFile('FileAkte')){
            $file = $request->file('FileAkte');
            $file_akte = "akte_" . $no_app . "_" .$file->getClientOriginalName();
            $file->move('file',$file_akte);
        }
        $file_pngshan= '';
        if($request->hasFile('FilePngshan')){
            $file = $request->file('FilePngshan');
            $file_pngshan = "Pngshan_" . $no_app . "_" .$file->getClientOriginalName();
            $file->move('file',$file_pngshan);
        }
        $file_apt= '';
        if($request->hasFile('FileApt')){
            $file = $request->file('FileApt');
            $file_apt = "apt_" . $no_app . "_" .$file->getClientOriginalName();
            $file->move('file',$file_apt);
        }
        $file_ktp= '';
        if($request->hasFile('FileKTP')){
            $file = $request->file('FileKTP');
            $file_ktp = "ktp_" . $no_app . "_" .$file->getClientOriginalName();
            $file->move('file',$file_ktp);
        }
        $file_skm= '';
        if($request->hasFile('FileSKM')){
            $file = $request->file('FileSKM');
            $file_skm = "skm_" .$no_app . "_" .$file->getClientOriginalName();
            $file->move('file',$file_skm);
        }
        $file_sp= '';
        if($request->hasFile('FileSp')){
            $file = $request->file('FileSp');
            $file_sp = "sp_" . $no_app . "_" .$file->getClientOriginalName();
            $file->move('file',$file_sp);
        }

        $ap = new akteperu();


        $ap->id_perusahaan = $id_perusahaan;
        $ap->Akte_Pendirian_No = $request->APP;
        $ap->Bank = $request->Bank;
        $ap->Rek = $request->Rek;
        $ap->File_Akte = $file_akte;
        $ap->File_Pengesahan = $file_pngshan;
        $ap->Apt_No = $request->APT;
        $ap->Tgl_Apt = $request->Tgl_Apt;
        $ap->File_Apt = $file_apt;
        $ap->Tgl_Direksi = $request->Tgl_Direksi;
        $ap->File_ktp = $file_ktp;
        $ap->File_Skm = $file_skm;
        $ap->File_Sp = $file_sp;

        $ap->save();

        return redirect('/VerifikasiQSHE/' . $id_perusahaan);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\akteperu  $akteperu
     * @return \Illuminate\Http\Response
     */
    public function show(akteperu $akteperu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\akteperu  $akteperu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ap = akteperu::where('id_perusahaan',$id)->firstOrFail();
        return view('Datavendor.edit_dp', compact('ap'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\akteperu  $akteperu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'APP'=>'required',
            'Bank'=>'required',
            'Rek'=>'required',

            'APT'=>'required',
            'Tgl_Apt'=>'required',

            'Tgl_Direksi'=>'required',

        ]);

        $ap = akteperu::where('id_perusahaan',$id)->firstOrFail();
        $no_app = $request->APP;
        $file_akte= '';
        if($request->hasFile('FileAkte')){
            $file = $request->file('FileAkte');
            $file_akte = "akte_" . $no_app . "_" .$file->getClientOriginalName();
            $file->move('file',$file_akte);
            $ap->File_Akte = $file_akte;
        }
        $file_pngshan= '';
        if($request->hasFile('FilePngshan')){
            $file = $request->file('FilePngshan');
            $file_pngshan = "Pngshan_" . $no_app . "_" .$file->getClientOriginalName();
            $file->move('file',$file_pngshan);
            $ap->File_Pengesahan = $file_pngshan;
        }
        $file_apt= '';
        if($request->hasFile('FileApt')){
            $file = $request->file('FileApt');
            $file_apt = "apt_" . $no_app . "_" .$file->getClientOriginalName();
            $file->move('file',$file_apt);
            $ap->File_Apt = $file_apt;
        }
        $file_ktp= '';
        if($request->hasFile('FileKTP')){
            $file = $request->file('FileKTP');
            $file_ktp = "ktp_" . $no_app . "_" .$file->getClientOriginalName();
            $file->move('file',$file_ktp);
            $ap->File_ktp = $file_ktp;
        }
        $file_skm= '';
        if($request->hasFile('FileSKM')){
            $file = $request->file('FileSKM');
            $file_skm = "skm_" .$no_app . "_" .$file->getClientOriginalName();
            $file->move('file',$file_skm);
            $ap->File_Skm = $file_skm;
        }
        $file_sp= '';
        if($request->hasFile('FileSp')){
            $file = $request->file('FileSp');
            $file_sp = "sp_" . $no_app . "_" .$file->getClientOriginalName();
            $file->move('file',$file_sp);
            $ap->File_Sp = $file_sp;
        }




        $ap->Akte_Pendirian_No = $request->APP;
        $ap->Bank = $request->Bank;
        $ap->Rek = $request->Rek;


        $ap->Apt_No = $request->APT;
        $ap->Tgl_Apt = $request->Tgl_Apt;

        $ap->Tgl_Direksi = $request->Tgl_Direksi;


        $ap->save();

        return redirect('/VerifikasiQSHE/edit/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\akteperu  $akteperu
     * @return \Illuminate\Http\Response
     */
    public function destroy(akteperu $akteperu)
    {
        //
    }
}
