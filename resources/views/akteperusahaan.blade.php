@extends('layouts.User')

@section('content')

<div class="container">
<h2>Persyaratan umum</h2>
<form method="post" action="/Dataprocurement">
@csrf

<div class="form-group row">
    <div class="col-sm-2 col-form-label">Akte pendirian perusahaan</div>
        <div class="col-sm-5">
            <input type="text" class="form-control @error('Akte_Pendirian_No') is-invalid @enderror" 
            id="Akte_Pendirian_No" name="Akte_Pendirian_No" value="{{old('Akte_Pendirian_No')}}">
            @error('Akte_Pendirian_No')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="col-sm-5">
            <input type="text" class="form-control @error('Bank') is-invalid @enderror" 
            id="Bank" name="Bank" value="{{old('Bank')}}">
            @error('Bank')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="col-sm-5">
            <input type="text" class="form-control @error('Rek') is-invalid @enderror" 
            id="Rek" name="Rek" value="{{old('Rek')}}">
            @error('Rek')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="col-sm-5">
            <input type="file" name="pdf"/>
        </div>
    </div>
</div>

  <div class="form-group row">
  <div class="col-sm-2 col-form-label">pengesahan Akte pendirian</div>
    <div class="col-sm-5">
      <input type="file" class="form-control @error('File harus upload') is-invalid @enderror" 
      id="File harus upload" name="File harus upload" >
      @error('File harus upload')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>

<div class="form-group row">
    <div class="col-sm-2 col-form-label">Akte pendirian terakhir</div>
        <div class="col-sm-5">
            <input type="text" class="form-control @error('Apt_No') is-invalid @enderror" 
            id="Apt_No" name="Apt_No" value="{{old('Apt_No')}}">
            @error('Apt_No')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="col-sm-5">
            <input type="text" class="form-control @error('Tgl_Apt') is-invalid @enderror" 
            id="Tgl_Apt" name="Tgl_Apt" value="{{old('Tgl_Apt')}}">
            @error('Tgl_Apt')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
    <div class="col-sm-5"> 
        <input type="file" class="form-control @error('File harus upload') is-invalid @enderror" 
        id="File harus upload" name="File harus upload" >
        @error('File harus upload')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

  <div class="col-sm-2 col-form-label">Masa Jabatan Direksi</div>
        <div class="col-sm-5">
            <input type="text" class="form-control @error('Masa Jabtan Dieksi') is-invalid @enderror" 
            id="Masa Jabtan Dieksi" name="Masa Jabtan Dieksi" value="{{old('Masa Jabtan Dieksi')}}">
            @error('Masa Jabtan Dieksi')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-2 col-form-label">Fotokopi KTP Pengurus </div>
        <div class="col-sm-5">
        <input type="file" class="form-control @error('File harus upload') is-invalid @enderror" 
        id="File harus upload" name="File harus upload" >
        @error('File harus upload')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-2 col-form-label">Susunan Kepemilikan Modal</div>
        <div class="col-sm-5">
        <input type="file" class="form-control @error('File harus upload') is-invalid @enderror" 
        id="File harus upload" name="File harus upload" >
        @error('File harus upload')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-2 col-form-label">Susunan pengurus</div>
        <div class="col-sm-5">
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
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
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

