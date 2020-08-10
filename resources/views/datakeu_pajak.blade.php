@extends('layouts.User')

@section('content')

<div class="container">
<h2>Data Keuangan & Pajak</h2>
<form method="post" action="/Dataprocurement">
@csrf

<div class="form-group row mt-3">
    <div class="col-sm-2 col-form-label">Nomor pokok wajib pajak (NPWP)</div>
        <div class="col-sm-2">
            <input type="text" class="form-control @error('NPWP') is-invalid @enderror" 
            id="NPWP" name="NPWP" value="{{old('NPWP')}}">
            @error('Surat Keterangan Domisili')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        
            <input type="file" name="pdf"/>
        
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-2 col-form-label">Surat pengukuhan pengusaha kena pajak (SPPKP)</div>
        <div class="col-sm-2">
            <input type="text" class="form-control @error('SPPKP') is-invalid @enderror" 
            id="SPPKP" name="SPPKP"  value="{{old('SPPKP')}}">
            @error('Surat Keterangan Domisili')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="file" name="pdf"/>
        </div>
    </div>
</div>

<div class="container">
    <div class="form-group row">
        <div class="col-sm-2 col-form-label">SPT Tahunan PPh Badan</div>
            <div class="col-sm-2">
                <input type="text" class="form-control @error('SPT') is-invalid @enderror" 
                id="SPT" name="SPT" value="{{old('SPT')}}">
                @error('Surat Keterangan Domisili')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input type="file" name="pdf"/>
            </div>
</div>

<div class="form-group row">
    <div class="col-sm-2 col-form-label">SPP 3 Bulan terakhir</div>
        <div class="col-sm-2">
            <input type="text" class="form-control @error('SPP') is-invalid @enderror" 
            id="SPP" name="SPP" value="{{old('SPT')}}">
            @error('Surat Keterangan Domisili')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        <input type="file" name="pdf"/>
    </div>
</div>



<div class="form-group row">
    <div class="col-sm-2 col-form-label">Ekuitas/Nilai kekayaan bersih</div>
        <div class="col-sm-2">
        <input type="text" class="form-control  @error('Ekuitas/Nilai kekayaan bersih') is-invalid @enderror" 
        id="Ekuitas/Nilai kekayaan bersih" name="Ekuitas/Nilai kekayaan bersih" value="{{old('Ekuitas/Nilai kekayaan bersih')}}">
        @error('Ekuitas/Nilai kekayaan bersih')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-2 col-form-label">Kualifikasi</div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">K (Ekuitas < 1M) </label>
        </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
        <label class="custom-control-label" for="customRadioInline2">M (Ekuitas 1 < 10M)</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
        <label class="custom-control-label" for="customRadioInline3">B (Ekuitas 1 > 10M)</label>
    </div>
</div>



<div class="form-group row ">
    <div class="col-sm-2 col-form-label">Audit KAP >1 Tahun terakhir</div>
        <div class="col-sm-3">
        <input type="file" class="form-control @error('File harus upload') is-invalid @enderror" 
        id="File harus upload" name="File harus upload" >
        @error('File harus upload')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<div class="form-group row ">
    <div class="col-sm-2 col-form-label">Kemampuan Dasar (KD) Sisa kemampuan nyata & paket</div>
        <div class="col-sm-3">
        <input type="file" class="form-control @error('File harus upload') is-invalid @enderror" 
        id="File harus upload" name="File harus upload" >
        @error('File harus upload')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>



<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
    <div class="btn-group" role="group" aria-label="First group">
    <button type="submit" class="btn btn-primary mb-2">Kembali</button>
    </div>

    <div class="input-group">
    <div class="input-group-prepend">
    <button type="submit" class="btn btn-primary mb-2">Selanjutnya</button>
    </div>
    </div>
</div>

</div>
</form> 
@endsection

