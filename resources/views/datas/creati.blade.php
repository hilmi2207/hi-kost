
@extends('layout/prof')
@section('title', 'HI-KOST')
@section('container')

                   <div class="daftarkost">
                <div class="p-3 mb-2 bg-white text-dark" class="container">
                    <div class="section-header">
                        <h1>Daftar Kos-kosan</h1>
                    </div>
                    <div class="row">
                        @foreach( $datas as $data)
                        <div class="col-lg-3 col-md-6">
                            <div class="daftarkost-item">
                                
                                <h1>{{ $data->nama}}</h1>
                                <p>
                                Alamat: {{ $data->alamat}}
                                <br></br>
                                Fasilitas : {{ $data->fasilitas}}
                                </p>
                                <a class="btn" href="/datas/{{ $data->id }}">Selengkapnya</a>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
            @endsection
            
 
            