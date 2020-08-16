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
                id="SKD" placeholder="No SKD" name="SKD" value="{{ $pu->Skd_No }}">
                @error('SKD')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control @error('TanggalMulaiDomsili') is-invalid @enderror"
                id="TanggalMulaiDomsili" placeholder="Tanggal mulai domisili" name="Tanggal_mulai_domisili" value="{{ $pu->Tgl_Dom_Mul}}">
                @error('TanggalMulaiDomsili')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control @error('TanggalSelesaiDomisili') is-invalid @enderror"
                id="TanggalSelesaiDomisili" placeholder="Tanggal selesai domisili" name="Tanggal_Selesai_Domisili" value="{{ $pu->Tgl_Dom_Sel}}">
                @error('TanggalSelesaiDomisili')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-sm-3">
                <input type="file" class="form-control @error('FileSDOM') is-invalid @enderror"  value="{{ $pu->File_SDOM}}"
                id="FileSDOM" name="FileSDOM" >
                <a href="{{ asset('file/' . $pu->File_SDOM) }}" target="_blank">Lihat File</a>
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
                <input type="file" class="form-control @error('FileSpmr') is-invalid @enderror" value="{{ $pu->File_Spmr}}"
                id="FileSpmr" name="FileSpmr" >
                <a href="{{ asset('file/' . $pu->File_Spmr ) }}" target="_blank">Lihat File</a>
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
                id="Tanda Daftar Perusahaan" placeholder="No TDP" name="Tanda_Daftar_Perusahaan" value="{{ $pu->Tdp_no}}">
                @error('Tanda Daftar Perusahaan')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control @error('Tanggal TDP Mulai') is-invalid @enderror"
                id="Tanggal TDP Mulai" placeholder="Tanggal mulai TDP" name="TDPMul" value="{{ $pu->Tgl_Tdp_Mul}}">
                @error('Tanggal TDP Mulai')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control @error('Tanggal TDP Selesai') is-invalid @enderror"
                id="Tanggal TDP Selesai" placeholder="Tanggal selesai TDP" name="TDPSel" value="{{ $pu->Tgl_Tdp_Sel}}">
                @error('Tanggal TDP Selesai')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-sm-3">
                <input type="file" class="form-control @error('FileTDP') is-invalid @enderror" value="{{ $pu->File_Tdp}}"
                id="FileTDP" name="FileTDP" >
                <a href="{{ asset('file/' . $pu->File_Tdp  ) }}" target="_blank">Lihat File</a>
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
            <input type="file" class="form-control @error('FileSPKD') is-invalid @enderror" value="{{ $pu->File_Spkp}}"
            id="FileSPKD" name="FileSPKD" >
            <a href="{{ asset('file/' . $pu->File_Spkd   ) }}" target="_blank">Lihat File</a>
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
                id="Lama Perusahaan didirikan" name="Lama_Perusahaandiri" value="{{ $pu->lama_perushndirikan }}">
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
            id="Lama perusahaan kerjsama dengan PP Urban" name="Lama_perusahaan_kerjsama_PP" value="{{ $pu->lamaprshn_krjsamapp}}">
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
            id="Sertifkalibrasi" name="Sertifkalibrasi" value="{{ $pu->File_srtifktkalibrasi}}" >
            <a href="{{ asset('file/' . $pu->File_srtifktkalibrasi    ) }}" target="_blank">Lihat File</a>
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
            <a href="{{ url('Dataprocurement') }}"  class="btn btn-primary mb-2">Kembali</a>
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
