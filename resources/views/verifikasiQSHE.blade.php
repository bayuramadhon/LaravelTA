@extends('layouts.User')

@section('content')

<div class="container">
<h2>Persyaratan umum</h2>
<form method="post" action="/Dataprocurement">
@csrf

<div class="form-group row">
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

<div class="col-sm-2 col-form-label">Siapakah yang bertanggung jawab terhadap iso mutu dan K3L diperusahaan anda</div>
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

<div class="input-group">
    <div class="input-group-prepend">
        <button type="submit" class="btn btn-primary mb-2">Selesai</button>
    </div>
</div>
    </div>
</div>
</form> 
@endsection

