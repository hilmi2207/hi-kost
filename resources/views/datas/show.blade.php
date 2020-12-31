
@extends('layout/main')
@section('title', 'Detail Kos')
@section('container')

<div class="card" class="text-center">
  <div class="card-body">
    <h5 class="text-center" class="card-title">{{ $data->nama }}</h5>
    
    <p class="text-center" class="card-text">Nama       : {{ $data->alamat }}</p>
    <p class="text-center" class="card-text">Alamat     : {{ $data->fasilitas }}</p>
    <p class="text-center" class="card-text">Kontak     : {{ $data->kontak }}</p>
    <p class="text-center" class="card-text" >Jenis kos  : {{ $data->jeniskos }}</p>
    <p class="text-center" class="card-text" >Harga      : {{ $data->harga }}</p>
    <p class="text-center" class="card-text" >Penjaga    : {{ $data->penjaga }}</p>
    
  </div>
</div>    
            @endsection
            
 
            