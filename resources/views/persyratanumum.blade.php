@extends('layouts.User')

@section('content')

<div class="container">
<h2>Persyaratan umum</h2>
<form method="post" action="/Dataprocurement">
@csrf

<div class="form-group row">
    <div class="col-sm-2 col-form-label">Surat Keterangan Domisili</div>
        <div class="col-sm-5">
            <input type="text" class="form-control @error('Surat keterangan domisili') is-invalid @enderror" 
            id="Surat keterangan domisili" name="Surat keterangan domisili" value="{{old('Surat keterangan domisili')}}">
            @error('Surat Keterangan Domisili')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="col-sm-5">
            <input type="text" class="form-control @error('Tanggal domisili mulai') is-invalid @enderror" 
            id="Tanggal domisili mulai" name="Tanggal domisili mulai" value="{{old('Tanggal domisili mulai')}}">
            @error('Tanggal domisili mulai')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="col-sm-5">
            <input type="text" class="form-control @error('Tanggal domisili Selesai') is-invalid @enderror" 
            id="Tanggal domisili Selesai" name="Tanggal domisili Selesai" value="{{old('Tanggal domisili Selesai')}}">
            @error('Tanggal domisili Selesai')
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
  <div class="col-sm-2 col-form-label">Surat permohonan menjadi rekan</div>
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
  <div class="col-sm-2 col-form-label">Organisai Chart termasuk personil quality dan safety</div>
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

  <div class="col-sm-2 col-form-label">Tanda Daftar Perusahaan</div>
        <div class="col-sm-5">
            <input type="text" class="form-control @error('Tanda Daftar Perusahaan') is-invalid @enderror" 
            id="Tanda Daftar Perusahaan" name="Tanda Daftar Perusahaan" value="{{old('Tanda Daftar Perusahaan')}}">
            @error('Tanda Daftar Perusahaan')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="col-sm-5">
            <input type="text" class="form-control @error('Tanggal TDP mulai') is-invalid @enderror" 
            id="Tanggal domisili mulai" name="Tanggal domisili mulai" value="{{old('Tanggal domisili mulai')}}">
            @error('Tanggal TDP mulai')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="col-sm-5">
            <input type="text" class="form-control @error('Tanggal TDP selesai') is-invalid @enderror" 
            id="Tanggal TDP selesai" name="Tanggal TDP selesai" value="{{old('Tanggal TDP selesai')}}">
            @error('Tanggal TDP selesai')
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
  <div class="col-sm-2 col-form-label">Surat Pernyataan kebenaran dokumen</div>
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
    <div class="col-sm-2 col-form-label">Lama Perusahaan didirikan</div>
        <div class="col-sm-5">
        <input type="text" class="form-control  @error('Lama Perusahaan didirikan') is-invalid @enderror" 
        id="Lama Perusahaan didirikan" name="Lama Perusahaan didirikan" value="{{old('Lama Perusahaan didirikan')}}">
        @error('Lama Perusahaan didirikan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-2 col-form-label">Lama perusahaan kerjsama dengan PP Urban</div>
        <div class="col-sm-5">
        <input type="text" class="form-control  @error('Lama perusahaan kerjsama dengan PP Urban') is-invalid @enderror" 
        id="Lama perusahaan kerjsama dengan PP Urban" name="Lama perusahaan kerjsama dengan PP Urban" value="{{old('Lama perusahaan kerjsama dengan PP Urban')}}">
        @error('Nama perusahaan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
  </div>

<div class="form-group row">
    <div class="col-sm-2 col-form-label">Data proyek yang bekerjasama dengan PP Urban </div>
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
<div class="col-sm-2 col-form-label">Daftar peralatan yang dipakai dan Sertifikat kalibrasi </div>
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
    <div class="col-sm-2 col-form-label">Metode pelaksanaan dan Fakroe Mutu K3L </div>
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
    <div class="col-sm-2 col-form-label">Surat Keagenan tunggal/pabrikan/agen/distributor</div>
        <div class="col-sm-5">
            <input type="text" class="form-control @error('Nomor Surat Keagenan') is-invalid @enderror" 
            id="SNomor Surat Keagenan" name="Nomor Surat Keagenan" value="{{old('Nomor Surat Keagenan')}}">
            @error('Surat Keagenan')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="col-sm-5">
            <input type="text" class="form-control @error('agen Tanggal mulai') is-invalid @enderror" 
            id="agen Tanggal mulai" name="agen Tanggal mulai" value="{{old('agen Tanggal mulai')}}">
            @error('agen Tanggal mulai')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="col-sm-5">
            <input type="text" class="form-control @error('agen Tanggal selesai') is-invalid @enderror" 
            id="agen Tanggal selesai" name="agen Tanggal selesai" value="{{old('agen Tanggal selesai')}}">
            @error('Tanggal domisili Selesai')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="col-sm-5">
            <input type="file" name="pdf"/>
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

