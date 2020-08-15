@extends('layouts.User')

@section('content')
<div class="container">
    <h1 class="mt-3">Hasil Pemenang</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope ="col">No</th>
            <th scope ="col">Nama perusahaan</th>
            <th scope ="col">Jenis barang/pekerjaan</th>
            <th scope ="col">Nilai kontrak</th>
            </tr>
        </thead>
            <tbody>
            <tr>
            <th scope="row">1</th>
            <td> PT. Adi Karya  </td>
            <td> Pembangunan Apartemen Bogor</td>
            <td> Rp 100.000.000.000.00 </td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td> PT. Surya Mandiri  </td>
            <td> Pembangunan Jembatan</td>
            <td> Rp 750.000.000.00 </td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td> PT. Wika  </td>
            <td> pembangunan Gedung Perkantoran</td>
            <td> Rp 12.000.000.000.00 </td>
            </tr>
    </table>
</div>
@endsection    