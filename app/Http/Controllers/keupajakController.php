<?php

namespace App\Http\Controllers;

use App\keupajak;
use Illuminate\Http\Request;

class keupajakController extends Controller
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
            'NPWP_No'=>'required',
            'FileNPWP'=>'required',
            'Sppkp_No'=>'required',
            'FileSppkp'=>'required',
            'Spt_No'=>'required',
            'FileSpt'=>'required',
            'Spp_No'=>'required',
            'FileSpp'=>'required',
            'bank'=>'required',
            'Rek'=> 'required',
            'FileBank'=> 'required',
            'Ekuitas'=>'required',
            'Kwalifikasi'=>'required',
            'FileKd'=>'required',
        ]);

        $npwp_no = $request->NPWP_No;
        $file_npwp= '';
        if($request->hasFile('FileNPWP')){
            $file = $request->file('FileNPWP');
            $file_npwp = "npwp_" . $npwp_no . "_" . $file->getClientOriginalName();
            $file->move('file',$file_npwp);
        }
        $file_sppkp= '';
        if($request->hasFile('FileSppkp')){
            $file = $request->file('FileSppkp');
            $file_sppkp = "sppkp_" . $npwp_no . "_" . $file->getClientOriginalName();
            $file->move('file',$file_sppkp);
        }
        $file_spt= '';
        if($request->hasFile('FileSpt')){
            $file = $request->file('FileSpt');
            $file_spt = "spt_" . $npwp_no . "_" . $file->getClientOriginalName();
            $file->move('file',$file_spt);
        }
        $file_spp= '';
        if($request->hasFile('FileSpp')){
            $file = $request->file('FileSpp');
            $file_spp = "spp_" . $npwp_no . "_" . $file->getClientOriginalName();
            $file->move('file',$file_spp);
        }
        $file_bank= '';
        if($request->hasFile('FileBank')){
            $file = $request->file('FileBank');
            $file_bank = "bank_" . $npwp_no . "_" . $file->getClientOriginalName();
            $file->move('file', $file_bank);
        }
        $file_kd= '';
        if($request->hasFile('FileKd')){
            $file = $request->file('FileKd');
            $file_kd = "kd_" . $npwp_no . "_" . $file->getClientOriginalName();
            $file->move('file',$file_kd);
        }

        $kp = new keupajak();

        $kp->id_perusahaan = $id_perusahaan;
        $kp->NPWP_No = $request->NPWP_No;
        $kp->File_NPWP = $file_npwp;
        $kp->Sppkp_No = $request->Sppkp_No;
        $kp->File_Sppkp = $file_sppkp;
        $kp->Spt_No = $request->Spt_No;
        $kp->File_Spt = $file_spt;
        $kp->Spp_No = $request->Spp_No;
        $kp->File_Spp =  $file_spp;
        $kp->bank = $request->bank;
        $kp->rekening = $request->Rek;
        $kp->File_bank = $file_bank;
        $kp->Ekuitas = $request->Ekuitas;
        $kp->kwalifikasi = $request->Kwalifikasi;
        $kp->File_Kd = $file_kd;


        $kp->save();

        return redirect('/akteperusahaan/' . $id_perusahaan);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\keupajak  $keupajak
     * @return \Illuminate\Http\Response
     */
    public function show(keupajak $keupajak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\keupajak  $keupajak
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kp = keupajak::where('id_perusahaan',$id)->firstOrFail();
        return view('Datavendor.edit_kp', compact('kp'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\keupajak  $keupajak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'NPWP_No'=>'required',

            'Sppkp_No'=>'required',

            'Spt_No'=>'required',

            'Spp_No'=>'required',

            'bank'=>'required',
            'Rek'=> 'required',

            'Ekuitas'=>'required',
            'Kwalifikasi'=>'required',

        ]);

        $kp = keupajak::where('id_perusahaan',$id)->firstOrFail();
        $npwp_no = $request->NPWP_No;
        $file_npwp= '';
        if($request->hasFile('FileNPWP')){
            $file = $request->file('FileNPWP');
            $file_npwp = "npwp_" . $npwp_no . "_" . $file->getClientOriginalName();
            $file->move('file',$file_npwp);
            $kp->File_NPWP = $file_npwp;
        }
        $file_sppkp= '';
        if($request->hasFile('FileSppkp')){
            $file = $request->file('FileSppkp');
            $file_sppkp = "sppkp_" . $npwp_no . "_" . $file->getClientOriginalName();
            $file->move('file',$file_sppkp);
            $kp->File_Sppkp = $file_sppkp;
        }
        $file_spt= '';
        if($request->hasFile('FileSpt')){
            $file = $request->file('FileSpt');
            $file_spt = "spt_" . $npwp_no . "_" . $file->getClientOriginalName();
            $file->move('file',$file_spt);
            $kp->File_Spt = $file_spt;
        }
        $file_spp= '';
        if($request->hasFile('FileSpp')){
            $file = $request->file('FileSpp');
            $file_spp = "spp_" . $npwp_no . "_" . $file->getClientOriginalName();
            $file->move('file',$file_spp);
            $kp->File_Spp =  $file_spp;

        }
        $file_bank= '';
        if($request->hasFile('FileBank')){
            $file = $request->file('FileBank');
            $file_bank = "bank_" . $npwp_no . "_" . $file->getClientOriginalName();
            $file->move('file', $file_bank);
            $kp->File_bank = $file_bank;
        }
        $file_kd= '';
        if($request->hasFile('FileKd')){
            $file = $request->file('FileKd');
            $file_kd = "kd_" . $npwp_no . "_" . $file->getClientOriginalName();
            $file->move('file',$file_kd);
            $kp->File_Kd = $file_kd;
        }

        $kp = new keupajak();


        $kp->NPWP_No = $request->NPWP_No;

        $kp->Sppkp_No = $request->Sppkp_No;

        $kp->Spt_No = $request->Spt_No;

        $kp->Spp_No = $request->Spp_No;

        $kp->bank = $request->bank;
        $kp->rekening = $request->Rek;

        $kp->Ekuitas = $request->Ekuitas;
        $kp->kwalifikasi = $request->Kwalifikasi;



        $kp->save();

        return redirect('/akteperusahaan/edit/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\keupajak  $keupajak
     * @return \Illuminate\Http\Response
     */
    public function destroy(keupajak $keupajak)
    {
        //
    }
}
