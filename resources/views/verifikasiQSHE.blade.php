@extends('layouts.User')

@section('content')

<form method="post" enctype="multipart/form-data">
<div class="container">
<h2>Verifikasi QSHE</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @csrf


<div class="form-group row mt-3">
  <div class="col-sm-2 col-form-label">File ISO K3L(9001:2015, ISO 14001, QHSAS 18001)</div>
    <div class="col-sm-5">
      <input type="file" class="form-control @error('FILEISO') is-invalid @enderror" value="{{old('FILEISO')}}"
      id="FILEISO" name="FILEISO" >
      @error('FILEISO')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
  </div>
</div>


<div class="form-group row ">
    <div class="col-sm-2 col-form-label">Penanggung jawab iso Mutu & K3L diperusahaan anda</div>
        <div class="col-sm-5">
        <input type="text" class="form-control  @error('PenanggungJwb') is-invalid @enderror"
        id="PenanggungJwb" name="PenanggungJwb" value="{{old('PenanggungJwb')}}">
        @error('PenanggungJwb')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<div class="form-group row">
  <div class="col-sm-2 col-form-label">Lampirkan Organisasi chart</div>
    <div class="col-sm-5">
      <input type="file" class="form-control @error('FileOrganisasi') is-invalid @enderror" value="{{old('FileOrganisasi')}}"
      id="FileOrganisasi" name="FileOrganisasi" >
      @error('FileOrganisasi')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>

<div class="form-group row">
    <div class="col-sm-2 col-form-label">Data teknis</div>
        <div class="col-sm-5">
        <input type="file" class="form-control @error('FileTeknis') is-invalid @enderror" value="{{old('FileTeknis')}}"
        id="FileTeknis" name="FileTeknis">
        @error('FileTeknis')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="btn-toolbar justify-content-between " role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mt-3" role="group" aria-label="First group">
    <a href="{{ url('akteperusahaan') }}"  class="btn btn-primary mb-2">Kembali</a>
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

