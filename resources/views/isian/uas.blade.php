@extends('layout.falihah')
@section('kontent')
<center>
<h3 class="liliy">Input Data Laporan Peminjaman Buku</h3>
<form class="liliy3" method="POST" action="/isian">
  @csrf
  <div class="mb-3">
    <label for="Nama" class="form-label">Nama</label>
    <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Isi Nama Lengkap Anda" value="{{Session::get('Nama')}}">
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input type="text" id="Email" name="Email" class="form-control" placeholder="Isi Email Aktif Anda" value="{{Session::get('Email')}}">
  </div>
  <div class="mb-3">
    <label for="No" class="form-label">No</label>
    <input type="text" id="No" name="No" class="form-control" placeholder="Isi No Buku" value="{{Session::get('No')}}">
  </div>
  <div class="mb-3">
    <label for="Judul" class="form-label">Judul</label>
    <input type="text" id="Judul" name="Judul" class="form-control" placeholder="Isi Judul Buku" value="{{Session::get('Judul')}}">
  </div>
  <div class="mb-3">
    <label for="Tanggal" class="form-label">Tanggal</label>
    <input type="text" id="Tanggal" name="Tanggal" class="form-control" placeholder="Isi Tanggal Pinjam" value="{{Session::get('Tanggal')}}">
  </div>
  <div class="mb-3">
    <label for="Lama" class="form-label">Lama</label>
    <input type="text" id="Lama" name="Lama" class="form-control" placeholder="Isi Lama Pinjam" value="{{Session::get('Lama')}}">
  </div>
  <div class="mb-3">
    <button>Submit</button>
  </div>
</form>  
</center> 
@endsection