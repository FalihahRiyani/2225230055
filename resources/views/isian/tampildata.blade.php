@extends('layout.falihah')
@section('kontent')
<a href="/"> Tambah Data</a>
<table class=table border= "2" cellpading="10" cellspaccing="0">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>No</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Lama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->Nama}}</td>
            <td>{{$item->Email}}</td>
            <td>{{$item->No}}</td>
            <td>{{$item->Judul}}</td>
            <td>{{$item->Tanggal}}</td>
            <td>{{$item->Lama}}</td>
            <td>
                <a class='btn btn-warning btn-sm' href="{{url('/isian/'.$item->Nama.'/edit')}}">Edit</a>
                <form onsubmit="return confirm('Apakah Anda Yakin?')" class="d-inline" action="{{'/isian/'.$item->Nama}}" method="post"> @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    
@endsection