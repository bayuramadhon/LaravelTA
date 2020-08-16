@extends('layouts.User')

@section('content')

<div class="container">
<h2>Data perusahaan</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post">
@csrf

  <div class="form-group row mt-3">
    <div class="col-sm-2 col-form-label">Divisi</div>
    <div class="col-sm-5">
      <input type="text" class="form-control @error('divisi') is-invalid @enderror"
      id="divisi" name="divisi" value="{{ $dp->divisi }}">
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
      id="jenisVendor" name="jenisVendor" value="{{ $dp->jenisVendor }}">
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
    id="jenisbrg_pekerjaan" name="jenisbrg_pekerjaan" value="{{ $dp->jenisbrg_pekerjaan }}">
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
    id="namaperusahaan" name="namaperusahaan" value="{{ $dp->namaperusahaan  }}">
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
    <input type="text" class="form-control @error('almtperusahan') is-invalid @enderror"
    id="almtperusahan" name="almtperusahan" value="{{ $dp->almtperusahan }}">
    @error('almtperusahan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-2 col-form-label">Telepon</div>
    <div class="col-sm-5">
    <input type="text" class="form-control  @error('telepon') is-invalid @enderror"
    id="telepon" name="telepon" value="{{ $dp->telp }}">
    @error('telepon')
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
    id="email" name="email" value="{{ $dp->email }}">
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
    id="PIC" name="PIC" value="{{ $dp->PIC }}">
    @error('PIC')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
      </div>
  </div>

<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group" role="group" aria-label="First group">
    <a href="{{ url()->previous() }}"  type="submit"  class="btn btn-primary mb-2">Kembali</a>
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

