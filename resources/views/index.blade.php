@extends('master')

@section('title', 'Index')

@section('content')
<h4>Data Buku</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama Pemain</th>
                <th>Nomor Punggung</th>
                <th>Posisi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_pemain as $pemain)
                <tr>
                    <td>{{id}}</td>
                    <td>{{$pemain->nama_pemain}}</td>
                    <td>{{$pemain->no_punggung}}</td>
                    <td>{{$pemain->posisi}}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection