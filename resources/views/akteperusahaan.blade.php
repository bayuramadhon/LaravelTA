@extends('layouts.User')

@section('content')

<div class="container">
<h2>Akte Perusahaan</h2>
<form method="post" action="/Dataprocurement">
@csrf

<div class="form-row mt-3">
    <div class="col-ms-2 col-form-label">Akte pendirian perusahaan</div>
        <div class="col-md-2">
            <input type="text" class="form-control @error('No Apt') is-invalid @enderror" 
            id="No Apt" placeholder="No Akte" name="No Apt" value="{{old('No Apt')}}">
            @error('No Apt')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control @error('Bank') is-invalid @enderror" 
            id="Bank" placeholder="Bank" name="Bank" value="{{old('Bank')}}">
            @error('Bank')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control @error('No Rek') is-invalid @enderror" 
            id="No Rek" placeholder="No Rek" name="No Rek" value="{{old('No Rek')}}">
            @error('No Rek')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
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
</div>

<div class="container">
<div class="form-group row mt-4">
    <div class="col-sm-2 col-form-label">Pengesahan akte pendirian</div>
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


<div class="form-row ">
    <div class="col-ms-2 col-form-label">Akte pendirian Terakhir</div>
        <div class="col-md-2">
            <input type="text" class="form-control @error('No Apt') is-invalid @enderror" 
            id="No Apt" placeholder="No Apt" name="No Apt" value="{{old('No Apt')}}">
            @error('No Apt')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control @error('Tanggal Apt') is-invalid @enderror" 
            id="Tanggal domisili mulai" placeholder="Tanggal Apt" name="Tanggal domisili mulai" value="{{old('Tanggal domisili mulai')}}">
            @error('Tanggal domisili mulai')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
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
</div>

<div class="container">
    <div class="form-group row mt-3">   
        <div class="col-sm-2 col-form-label">Masa Jabatan Direksi</div>
            <div class="col-sm-2">
                <input type="text" class="form-control @error('Masa Jabtan Dieksi') is-invalid @enderror" 
                id="Masa Jabtan Dieksi" name="Masa Jabtan Dieksi" value="{{old('Masa Jabtan Dieksi')}}">
                @error('Masa Jabtan Dieksi')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>
</div>

<div class="container">
<div class="form-group row ">
    <div class="col-sm-2 col-form-label">Fotokopi KTP Pengurus</div>
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
    <div class="col-sm-2 col-form-label">Susunan kepemilikan modal</div>
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
    <div class="col-sm-2 col-form-label">Susunan Pengurus</div>
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


<div class="btn-toolbar justify-content-between mt-5" role="toolbar" aria-label="Toolbar with button groups">
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

