@extends('layouts.User')

@section('content')

<div class="container">
<h2>Verifikasi QSHE</h2>
<form method="post" action="/Dataprocurement">
@csrf

<div class="form-group row mt-3">
  <div class="col-sm-2 col-form-label">File ISO K3L(9001:2015, ISO 14001, QHSAS 18001)</div>
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


<div class="form-group row ">
    <div class="col-sm-2 col-form-label">Penanggung jawab iso Mutu & K3L diperusahaan anda</div>
        <div class="col-sm-5">
        <input type="text" class="form-control  @error('Penanggung jawab iso mutu& K3L') is-invalid @enderror" 
        id="Penanggung jawab iso mutu& K3L" name="Penanggung jawab iso mutu& K3L" value="{{old('Penanggung jawab iso mutu& K3L')}}">
        @error('Penanggung jawab iso mutu & K3L')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<div class="form-group row">
  <div class="col-sm-2 col-form-label">Lampirkan Organisasi chart & CV</div>
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
    <div class="col-sm-2 col-form-label">Data teknis</div>
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


<div class="btn-toolbar justify-content-between " role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mt-3" role="group" aria-label="First group">
    <button type="submit" class="btn btn-primary mb-2">Kembali</button>
  </div>

<div class="input-group ">
  <div class="input-group-prepend mt-3">
    <button type="submit" class="btn btn-primary mb-2">Selesai</button>
    </div>
  </div>
</div>



</div>
</form> 
@endsection

