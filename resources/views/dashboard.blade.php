@extends('layout/prof')
@section('title', 'HI-KOST')
@section('container')
<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
    <div class="hero row align-items-center">
                        <div class="w-100% h-100% bg-primary text-dark" class="col-md-7">
                            <h2>HI-KOST</h2>
                            <h2><span>Kosan Nyaman? HI-KOST aja!</span></h2>
                            <p>Jadikanlah kosanmu sebagai <strong>Home</strong> bukan hanya sebagai <strong>House</strong> </p>
                            <a class="btn" href="{{url('/datas')}}">Jelajahi Sekarang</a>
                        </div>
                        
                    </div>
    
</x-app-layout>

@endsection
