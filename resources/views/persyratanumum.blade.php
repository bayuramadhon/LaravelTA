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
<form method="post" id="add-item" enctype="multipart/form-data">
@csrf


<div class="form-row mt-3">
    <div class="col-ms-2 col-form-label">Surat Keterangan Domisili :</div>
        <div class="col-md-2">
            <input type="text" class="form-control @error('Surat Keterangan Domisili') is-invalid @enderror" 
            id="SKD" placeholder="No SKD" name="SKD" value="{{old('SKD')}}">
            @error('SKD')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control @error('TanggalMulaiDomsili') is-invalid @enderror" 
            id="TanggalMulaiDomsili" placeholder="Tanggal mulai domisili" name="Tanggal_mulai_domisili" value="{{old('TanggalMulaiDomsili')}}">
            @error('TanggalMulaiDomsili')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control @error('TanggalSelesaiDomisili') is-invalid @enderror" 
            id="TanggalSelesaiDomisili" placeholder="Tanggal selesai domisili" name="Tanggal_Selesai_Domisili" value="{{old('TanggalSelesaiDomisili')}}">
            @error('TanggalSelesaiDomisili')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-3">
            <input type="file" class="form-control @error('File harus upload') is-invalid @enderror" 
            id="File harus upload" name="FileSDOM" >
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
        <div class="col-sm-2 col-form-label">Surat permohonan menjadi rekan</div>
            <div class="col-sm-3">
            <input type="file" class="form-control @error('File harus upload') is-invalid @enderror" 
            id="File harus upload" name="FileSpmr" >
            @error('File harus upload')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>


<div class="container">
<div class="form-row ">
    <div class="col-ms-2 col-form-label">Tanda Daftar Perusahaan :</div>
        <div class="col-md-2">
            <input type="text" class="form-control @error('Tanda Daftar Perusahaan') is-invalid @enderror" 
            id="Tanda Daftar Perusahaan" placeholder="No TDP" name="Tanda_Daftar_Perusahaan" value="{{old('Tanda Daftar Perusahaan')}}">
            @error('Tanda Daftar Perusahaan')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control @error('Tanggal TDP Mulai') is-invalid @enderror" 
            id="Tanggal TDP Mulai" placeholder="Tanggal mulai TDP" name="TDPMul" value="{{old('Tanggal TDP Mulai')}}">
            @error('Tanggal TDP Mulai')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control @error('Tanggal TDP Selesai') is-invalid @enderror" 
            id="Tanggal TDP Selesai" placeholder="Tanggal selesai TDP" name="TDPSel" value="{{old('Tanggal TDP Selesai')}}">
            @error('Tanggal TDP Selesai')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-3">
            <input type="file" class="form-control @error('File harus upload') is-invalid @enderror" 
            id="File harus upload" name="FileTDP" >
            @error('File harus upload')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<div class="form-group row mt-4">
    <div class="col-sm-2 col-form-label">Surat Pernyataan kebenaran dokumen</div>
        <div class="col-sm-3">
        <input type="file" class="form-control @error('File harus upload') is-invalid @enderror" 
        id="File harus upload" name="FileSPKD" >
        @error('File harus upload')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>
    </div>




<div class="form-group row ">
    <div class="col-sm-2 col-form-label">Lama Perusahaan didirikan</div>
        <div class="col-sm-2">
            <input type="text" class="form-control  @error('Lama Perusahaan didirikan') is-invalid @enderror" 
            id="Lama Perusahaan didirikan" name="Lama_Perusahaandiri" value="{{old('Lama Perusahaan didirikan')}}">
            @error('Lama Perusahaan didirikan')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>


<div class="container">
<div class="form-group row">
    <div class="col-sm-2 col-form-label">Lama perusahaan kerjsama dengan PP Urban</div>
        <div class="col-sm-2">
        <input type="text" class="form-control  @error('Lama perusahaan kerjsama dengan PP Urban') is-invalid @enderror" 
        id="Lama perusahaan kerjsama dengan PP Urban" name="Lama_perusahaan_kerjsama_PP" value="{{old('Lama perusahaan kerjsama dengan PP Urban')}}">
        @error('Nama perusahaan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>
    </div>
</div>



<div class="container">
<div class="form-group row ">
    <div class="col-sm-2 col-form-label">Sertifikat kalibrasi</div>
        <div class="col-sm-3">
        <input type="file" class="form-control @error('File harus upload') is-invalid @enderror" 
        id="File harus upload" name="Sertifkalibrasi" >
        @error('File harus upload')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
</div>


<div class="container">
<div class="btn-toolbar justify-content-between mt-5" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group" role="group" aria-label="First group">
            <a href="/Daftarprocurement" class="btn btn-primary mb-2">Kembali</a>
        </div>

    <div class="input-group">
        <div class="input-group-prepend">
            <button type="submit" class="btn btn-primary mb-2">Selanjutnya</button>
        </div>
    </div>
</div>
</div>


</div>
</form> 
@endsection

