@extends('layout/main')
@section('title', 'Formulir Kost')
@section('container')
<div class="p-3 mb-2 bg-light text-dark">
<h1 class="text-center">Formulir Kos</h1>

 
<form class="mx-auto" style="width: 800px;" action>

  <div class="mb-3">
    <label for="namakost" class="form-label">Nama Kos</label>
    <input type="namakost" class="form-control" id="namakos" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="alamat" class="form-control" id="alamat">
  </div>
  <div class="mb-3">
    <label for="fasilitas" class="form-label">Fasilitas</label>
    <input type="fasilitas" class="form-control" id="fasilitas">
  </div>
  <div class="mb-3">
    <label for="kontak" class="form-label">Kontak</label>
    <input type="kontak" class="form-control" id="kontak">
  </div>
  <div class="mb-3">
    <label for="jeniskos" class="form-label">Jenis Kos</label>
    <input type="jeniskos" class="form-control" id="jeniskos">
  </div>
  <div class="mb-3">
    <label for="harga" class="form-label">Harga</label>
    <input type="harga" class="form-control" id="harga">
  </div>
  <div class="mb-3">
    <label for="penjaga" class="form-label">Penjaga Kos</label>
    <input type="penjaga" class="form-control" id="penjaga">
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Masukkan Foto</label>
  <input class="form-control" type="file" id="formFile">
</div>

  <button type="submit" class="btn btn-primary" class="mb-4">Submit</button>
</form>
</div>
@endsection
            