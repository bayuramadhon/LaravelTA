@extends('layouts.User')

@section('content')
<form method="post" enctype="multipart/form-data">
    <div class="container">
        <h2>Akte Perusahaan X</h2>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf


        <div class="form-row mt-3">
            <div class="col-ms-2  col-form-label">Akte pendirian perusahaan</div>
            <div class="col-md-2" style="margin-left: 10px!important;">
                <input type="text" class="form-control @error('APP') is-invalid @enderror" id="APP"
                    placeholder="No Akte" name="APP" value="{{ old('APP') }}">
                @error('APP')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control @error('Bank') is-invalid @enderror" id="Bank" placeholder="Bank"
                    name="Bank" value="{{ old('Bank') }}">
                @error('Bank')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control @error('Rek') is-invalid @enderror" id="Rek" placeholder="No Rek"
                    name="Rek" value="{{ old('Rek') }}">
                @error('Rek')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-sm-3">
                <input type="file" class="form-control @error('FileAkte') is-invalid @enderror"  value="{{ old('FileAkte') }}" id="FileAkte"
                    name="FileAkte">
                @error('FileAkte')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="container">
        <div class="form-group row mt-4">
            <div class="col-sm-2 col-form-label">Pengesahan akte pendirian</div>
            <div class="col-sm-3" style="margin-left: 2px!important;">
                <input type="file" class="form-control @error('FilePngshan') is-invalid @enderror" id="FilePngshan"
                    name="FilePngshan">
                @error('FilePngshan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="form-row ">
            <div class="col-ms-2 col-form-label">Akte pendirian Terakhir</div>
            <div class="col-md-2" style="margin-left: 30px!important;">
                <input type="text" class="form-control @error('APT') is-invalid @enderror" id="APT" placeholder="No APT"
                    name="APT" value="{{ old('APT') }}">
                @error('APT')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control @error('Tgl_Apt') is-invalid @enderror" id="Tgl_Apt"
                    placeholder="Tanggal Apt" name="Tgl_Apt" value="{{ old('Tgl_Apt') }}">
                @error('Tgl_Apt')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-sm-3">
                <input type="file" class="form-control @error('FileApt') is-invalid @enderror" id="FileApt"
                    name="FileApt">
                @error('FileApt')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="container">
        <div class="form-group row mt-3">
            <div class="col-sm-2 col-form-label">Masa Jabatan Direksi</div>
            <div class="col-sm-2">
                <input type="text" class="form-control @error('Tgl_Direksi') is-invalid @enderror" id="Tgl_Direksi"
                    name="Tgl_Direksi" value="{{ old('Tgl_Direksi') }}">
                @error('Tgl_Direksi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="container">
        <div class="form-group row ">
            <div class="col-sm-2 col-form-label">Fotokopi KTP Pengurus</div>
            <div class="col-sm-3">
                <input type="file" class="form-control @error('FileKTP') is-invalid @enderror" value="{{ old('FileKTP') }}" id="FileKTP"
                    name="FileKTP">
                @error('FileKTP')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="form-group row ">
            <div class="col-sm-2 col-form-label">Susunan kepemilikan modal</div>
            <div class="col-sm-3">
                <input type="file" class="form-control @error('FileSKM') is-invalid  @enderror" id="FileSKM" value="{{ old('FileSKM') }}"
                    name="FileSKM">
                @error('FileSKM')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="form-group row ">
            <div class="col-sm-2 col-form-label">Susunan Pengurus</div>
            <div class="col-sm-3">
                <input type="file" class="form-control @error('FileSp') is-invalid @enderror" id="FileSp" name="FileSp" value="{{ old('FileSp') }}">
                @error('FileSp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="btn-toolbar justify-content-between mt-5" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group" role="group" aria-label="First group">
                <a href="{{ url('keuanganpajak') }}"  class="btn btn-primary mb-2">Kembali</a>
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
