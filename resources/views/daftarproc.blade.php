@extends('layouts.User')

@section('content')

<div class="container">
<h2>Data perusahaan</h2>
<form method="post" action="/Dataprocurement">
@csrf

  <div class="form-group row">
    <div class="col-sm-2 col-form-label">Divisi</div>
    <div class="col-sm-5">
      <input type="text" class="form-control @error('divisi') is-invalid @enderror" 
      id="divisi" name="divisi" value="{{old('divisi')}}">
      @error('divisi')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
  </div>
</div>

  <div class="form-group row">
  <div class="col-sm-2 col-form-label">Jenis Vendor</div>
    <div class="col-sm-5">
      <input type="text" class="form-control @error('jenisVendor') is-invalid @enderror" 
      id="jenisVendor" name="jenisVendor" value="{{old('jenisVendor')}}">
      @error('jenisVendor')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-2 col-form-label">Jenis barang/pekerjaan</div>
    <div class="col-sm-5">
    <input type="text" class="form-control  @error('jenisbrg_pekerjaan') is-invalid @enderror" 
    id="jenisbrg_pekerjaan" name="jenisbrg_pekerjaan" value="{{old('jenisbrg_pekerjaan')}}">
    @error('jenisbrg_pekerjaan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-2 col-form-label">Nama perusahaan</div>
    <div class="col-sm-5">
    <input type="text" class="form-control  @error('namaperusahaan') is-invalid @enderror" 
    id="namaperusahaan" name="namaperusahaan" value="{{old('namaperusahaan')}}">
    @error('namaperusahaan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-2 col-form-label">Alamat perusahaan</div>
    <div class="col-sm-5">
    <input type="text" class="form-control @error('almtperusahaan') is-invalid @enderror" 
    id="almtperusahaan" name="almtperusahaan" value="{{old('almtperusahaan')}}">
    @error('almtperusahaan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-2 col-form-label">Telepon</div>
    <div class="col-sm-5">
    <input type="text" class="form-control  @error('telp') is-invalid @enderror" 
    id="telp" name="telp" value="{{old('telp')}}">
    @error('Telepon')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-2 col-form-label">Email</div>
    <div class="col-sm-5">
    <input type="text" class="form-control  @error('email') is-invalid @enderror" 
    id="email" name="email" value="{{old('email')}}">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-2 col-form-label">PIC</div>
      <div class="col-sm-5">
    <input type="text" class="form-control @error('PIC') is-invalid @enderror" 
    id="PIC" name="PIC" value="{{old('PIC')}}">
    @error('PIC')
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


  <!-- <button type="submit" class="btn btn-primary mb-2">Submit</button> -->


</div>
</form> 
@endsection
