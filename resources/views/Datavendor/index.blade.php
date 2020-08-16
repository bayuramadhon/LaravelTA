@extends('layouts.User')

@section('content')
<div class="container">
    <h1 class="mt-3">Data Procurement</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope ="col">No</th>
                <th scope ="col">Divisi</th>
                <th scope ="col">Jenis vendor</th>
                <th scope ="col">Jenis barang/pekerjaan</th>
                <th scope ="col">Nama perusahaan</th>
                <th scope ="col">Alamat perusahaan</th>
                <th scope ="col">Telepon</th>
                <th scope ="col">Email</th>
                <th scope ="col">PIC</th>
                <th scope ="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach( $users as $vendor )
            <tr>
                <!-- <th scope="row">{{print_r($users)}}</th> -->
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $vendor->divisi }}</td>
                <td>{{ $vendor->jenisVendor }}</td>
                <td>{{ $vendor->jenisbrg_pekerjaan }}</td>
                <td>{{ $vendor->namaperusahaan }}</td>
                <td>{{ $vendor->almtperusahan }}</td>
                <td>{{ $vendor->telp }}</td>
                <td>{{ $vendor->email }}</td>
                <td>{{ $vendor->PIC }}</td>
                <td>
                <a a href="/Dataprocurement/edit/{{ $vendor->id }}"class="bagde badge-success">edit</a>
                <a a href="/Dataprocurement/delete/{{ $vendor->id }}" class="bagde badge-danger">delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
