@extends('layouts.User')

@section('content')

<form method="post" enctype="multipart/form-data">
<div class="container">
<h2>Persyaratan Umum</h2>
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
                id="TanggalMulaiDomsili" placeholder="Tanggal mulai domisili" name="Tanggal_mulai_domisili" value="{{old('Tanggal_mulai_domisili')}}">
                @error('TanggalMulaiDomsili')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control @error('TanggalSelesaiDomisili') is-invalid @enderror"
                id="TanggalSelesaiDomisili" placeholder="Tanggal selesai domisili" name="Tanggal_Selesai_Domisili" value="{{old('Tanggal_Selesai_Domisili')}}">
                @error('TanggalSelesaiDomisili')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-sm-3">
                <input type="file" class="form-control @error('FileSDOM') is-invalid @enderror"  value="{{old('FileSDOM')}}"
                id="FileSDOM" name="FileSDOM" >
                @error('FileSDOM')
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
                <input type="file" class="form-control @error('FileSpmr') is-invalid @enderror" value="{{old('FileSpmr')}}"
                id="FileSpmr" name="FileSpmr" >
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
                id="Tanda Daftar Perusahaan" placeholder="No TDP" name="Tanda_Daftar_Perusahaan" value="{{old('Tanda_Daftar_Perusahaan')}}">
                @error('Tanda Daftar Perusahaan')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control @error('Tanggal TDP Mulai') is-invalid @enderror"
                id="Tanggal TDP Mulai" placeholder="Tanggal mulai TDP" name="TDPMul" value="{{old('TDPMul')}}">
                @error('Tanggal TDP Mulai')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control @error('Tanggal TDP Selesai') is-invalid @enderror"
                id="Tanggal TDP Selesai" placeholder="Tanggal selesai TDP" name="TDPSel" value="{{old('TDPSel')}}">
                @error('Tanggal TDP Selesai')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-sm-3">
                <input type="file" class="form-control @error('FileTDP') is-invalid @enderror" value="{{old('FileTDP')}}"
                id="FileTDP" name="FileTDP" >
                @error('FileTDP')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>


    <div class="form-group row mt-4">
        <div class="col-sm-2 col-form-label">Surat Pernyataan kebenaran dokumen</div>
            <div class="col-sm-3">
            <input type="file" class="form-control @error('FileSPKD') is-invalid @enderror" value="{{old('FileSPKD')}}"
            id="FileSPKD" name="FileSPKD" >
            @error('FileSPKD')
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
                id="Lama Perusahaan didirikan" name="Lama_Perusahaandiri" value="{{old('Lama_Perusahaandiri')}}">
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
            id="Lama perusahaan kerjsama dengan PP Urban" name="Lama_perusahaan_kerjsama_PP" value="{{old('Lama_perusahaan_kerjsama_PP')}}">
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
            <input type="file" class="form-control @error('Sertifkalibrasi') is-invalid @enderror"
            id="Sertifkalibrasi" name="Sertifkalibrasi" >
            @error('Sertifkalibrasi')
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
            <a href="{{ url('Daftarprocurement') }}"  class="btn btn-primary mb-2">Kembali</a>
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
