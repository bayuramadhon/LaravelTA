<?php

namespace App\Http\Controllers;

use App\QSHE;
use Illuminate\Http\Request;

class QSHEController extends Controller
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
            'FILEISO' =>'required',
            'PenanggungJwb' =>'required',
            'FileOrganisasi' =>'required',
            'FileTeknis' =>'required',
        ]);

        $iso = $request->FILEISO;
        $file_iso= '';
        if($request->hasFile('FILEISO')){ // coba gus bantu
            $file = $request->file('FILEISO');
            $file_iso = "iso_" . $iso . "_" . $file->getClientOriginalName();
            $file->move('file',$file_iso);
        }
        $file_org= '';
        if($request->hasFile('FileOrganisasi')){
            $file = $request->file('FileOrganisasi');
            $file_org = "org_" . $iso . "_" . $file->getClientOriginalName();
            $file->move('file', $file_org);
        }
        $file_teknis= '';
        if($request->hasFile('FileTeknis')){
            $file = $request->file('FileTeknis');
            $file_teknis = "teknis_" . $iso . "_" . $file->getClientOriginalName();
            $file->move('file', $file_teknis);
        }

        $QS = new QSHE();

        $QS->id_perusahaan = $id_perusahaan;
        $QS->File_Iso = $file_iso;
        $QS->Penanggung_Jwb = $request->PenanggungJwb;
        $QS->File_OrgCV = $file_org;
        $QS->File_Teknis = $file_teknis;



        $QS->save();

        return redirect('\home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QSHE  $qSHE
     * @return \Illuminate\Http\Response
     */
    public function show(QSHE $qSHE)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QSHE  $qSHE
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $QS = QSHE::where('id_perusahaan',$id)->firstOrFail();
        return view('Datavendor.edit_qs', compact('QS'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QSHE  $qSHE
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([

            'PenanggungJwb' =>'required',

        ]);

        $QS = QSHE::where('id_perusahaan',$id)->firstOrFail();
        $iso = $request->FILEISO;
        $file_iso= '';
        if($request->hasFile('FILEISO')){ // coba gus bantu
            $file = $request->file('FILEISO');
            $file_iso = "iso_" . $iso . "_" . $file->getClientOriginalName();
            $file->move('file',$file_iso);
            $QS->File_Iso = $file_iso;
        }
        $file_org= '';
        if($request->hasFile('FileOrganisasi')){
            $file = $request->file('FileOrganisasi');
            $file_org = "org_" . $iso . "_" . $file->getClientOriginalName();
            $file->move('file', $file_org);
            $QS->File_OrgCV = $file_org;
        }
        $file_teknis= '';
        if($request->hasFile('FileTeknis')){
            $file = $request->file('FileTeknis');
            $file_teknis = "teknis_" . $iso . "_" . $file->getClientOriginalName();
            $file->move('file', $file_teknis);
            $QS->File_Teknis = $file_teknis;

        }

        $QS = new QSHE();


        $QS->File_Iso = $file_iso;
        $QS->Penanggung_Jwb = $request->PenanggungJwb;




        $QS->save();

        return redirect('\home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QSHE  $qSHE
     * @return \Illuminate\Http\Response
     */
    public function destroy(QSHE $qSHE)
    {
        //
    }
}
