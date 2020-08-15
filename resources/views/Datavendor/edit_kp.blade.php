@extends('layouts.User')

@section('content')

<form method="post" enctype="multipart/form-data">
    <div class="container">
        <h2>Data Keuangan & Pajak</h2>
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


        <div class="form-group row mt-3">
            <div class="col-sm-2 col-form-label">Nomor pokok wajib pajak (NPWP)</div>
            <div class="col-sm-2">
                <input type="text" class="form-control @error('NPWP') is-invalid @enderror" id="NPWP" name="NPWP_No"
                value="{{ $kp->NPWP_No }}">
                @error('NPWP_No')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="col-mb-10">
                    <input type="file" class="@error('FileNPWP') is-invalid @enderror" value="{{ $kp->File_NPWP }}" name="FileNPWP">
                    @error('FileNPWP')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2 col-form-label">Surat pengukuhan pengusaha kena pajak (SPPKP)</div>
            <div class="col-sm-2">
                <input type="text" class="form-control @error('SPPKP') is-invalid @enderror" id="SPPKP" name="Sppkp_No"
                value="{{ $kp->Sppkp_No }}">
                @error('SPPKP')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="file" class="@error('SPPKP') is-invalid @enderror"  value="{{ $kp->File_Sppkp }}" name="FileSppkp">
                @error('FileSppkp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2 col-form-label">SPT Tahunan PPh Badan</div>
            <div class="col-sm-2">
                <input type="text" class="form-control @error('Spt_No') is-invalid @enderror" value="{{ $kp->Spt_No }}" id="SPT" name="Spt_No"
                    >
                @error('Spt_No')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="file" class="@error('FileSpt') is-invalid @enderror"  value="{{ $kp->File_Spt }}" name="FileSpt">
                @error('FileSpt')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">

                <div class="col-sm-2 col-form-label">SPP 3 Bulan terakhir</div>
                <div class="col-sm-2">
                    <input type="text" class="form-control @error('Spp_No') is-invalid @enderror"  id="SPP" name="Spp_No"
                    value="{{ $kp->Spp_No }}">
                    @error('Spp_No')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="file" class="@error('FileSpp') is-invalid @enderror" value="{{ $kp->File_Spp }}" name="FileSpp">
                    @error('FileSpp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        </div>
        <div class="form-group row">
        <div class="form-row" style="margin-left: 10px!important;">
                    <div class="col-md-2 col-form-label in-line" style="margin-right: 45px!important;">Referensi Bank :</div>
                    <div class="col-md-2">
                        <input type="text" class="form-control @error('bank') is-invalid @enderror" id="bank"
                            placeholder="Nama Bank" name="bank" value="{{ $kp->bank }}">
                        @error('bank')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control @error('Rekenig') is-invalid @enderror" id="Rekenig"
                            placeholder="Rek" name="Rek" value="{{ $kp->Rekening }}">
                        @error('Rekenig')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="file" class="form-control @error(' FileBank') is-invalid @enderror" value="{{ $kp->File_Bank }}" }} id=" FileBank"
                            name=" FileBank" >
                        @error(' FileBank')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2 col-form-label">Ekuitas/Nilai kekayaan bersih</div>
            <div class="col-sm-2">
                <input type="text" class="form-control  @error('Ekuitas') is-invalid @enderror" id="Ekuitas"
                    name="Ekuitas" value="{{ $kp->Ekuitas }}">
                @error('Ekuitas')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2 col-form-label">Kualifikasi</div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" value="< 1M" name="Kwalifikasi"
                    class="custom-control-input" {{ ($kp->Kwalifikasi=="< 1M")? "checked" : "" }}>
                <label class="custom-control-label" for="customRadioInline1">K (Ekuitas < 1M) </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" value="1 < 10M" name="Kwalifikasi"
                    class="custom-control-input" {{ ($kp->Kwalifikasi=="1 < 10M")? "checked" : "" }}>
                <label class="custom-control-label" for="customRadioInline2">M (Ekuitas 1 < 10M)</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline3" value="1 > 10M" name="Kwalifikasi"
                    class="custom-control-input" {{ ($kp->Kwalifikasi=="1 > 10M")? "checked" : "" }}>
                <label class="custom-control-label" for="customRadioInline3">B (Ekuitas 1 > 10M)</label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2 col-form-label">Kemampuan Dasar (KD) Sisa kemampuan nyata & paket</div>
            <div class="col-sm-3">
                <input type="file" class="form-control @error('FileKd') is-invalid @enderror" value="{{ $kp->File_Kd }}" }} id="FileKd" name="FileKd">
                @error('FileKd')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group" role="group" aria-label="First group">
            <a href="{{ url('persyaratan_umum') }}"  class="btn btn-primary mb-2">Kembali</a>
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
