@extends('layout.falihah')
@section('kontent')
<h3>Input Data Laporan Peminjaman Buku</h3>
<form method="POST" action="{{'/isian/'. $data->Nama}}">
    @csrf
    @method('put') 
  <div class="mb-3">
    <label for="Nama" class="form-label">Nama</label>
    <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Isi Nama Lengkap Anda" value="{{$data->Nama}}">
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input type="text" id="Email" name="Email" class="form-control" placeholder="Isi Email Aktif Anda" value="{{$data->Email}}">
  </div>
  <div class="mb-3">
    <label for="No" class="form-label">No</label>
    <input type="text" id="No" name="No" class="form-control" placeholder="Isi No Buku" value="{{$data->No}}">
  </div>
  <div class="mb-3">
    <label for="Judul" class="form-label">Judul</label>
    <input type="text" id="Judul" name="Judul" class="form-control" placeholder="Isi Judul Buku" value="{{$data->Judul}}">
  </div>
  <div class="mb-3">
    <label for="Tanggal" class="form-label">Tanggal</label>
    <input type="text" id="Tanggal" name="Tanggal" class="form-control" placeholder="Isi Tanggal Pinjam" value="{{$data->Tanggal}}">
  </div>
  <div class="mb-3">
    <label for="Lama" class="form-label">Lama</label>
    <input type="text" id="Lama" name="Lama" class="form-control" placeholder="Isi Lama Pinjam" value="{{$data->Lama}}">
  </div>
  <div class="mb-3">
    <button>Edit</button><a class="btn btn-secondry" href="/isian">Kembali</a>
  </div>
</form>   
@endsection