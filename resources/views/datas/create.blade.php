@extends('layout/prof')
@section('title', 'Formulir Kost')
@section('container')
<div class="p-3 mb-2 bg-light text-dark">
<h1 class="text-center">Formulir Kos</h1>

<form method="POST" action="/datas" class="text-center">
            @csrf

            <div >
                <x-jet-label for="nama" value="{{ __('Nama') }}" />
                <x-jet-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autofocus autocomplete="nama" />
            </div>
            <div>
                <x-jet-label for="alamat" value="{{ __('Alamat') }}" />
                <x-jet-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" required autofocus autocomplete="alamat" />
            </div>
            <div>
                <x-jet-label for="fasilitas" value="{{ __('Fasilitas') }}" />
                <x-jet-input id="fasilitas" class="block mt-1 w-full" type="text" name="fasilitas" :value="old('fasilitas')" required autofocus autocomplete="fasilitas" />
            </div>
            <div>
                <x-jet-label for="kontak" value="{{ __('Kontak') }}" />
                <x-jet-input id="kontak" class="block mt-1 w-full" type="text" name="kontak" :value="old('kontak')" required autofocus autocomplete="kontak" />
            </div>

            <div>
                <x-jet-label for="jeniskos" value="{{ __('Jenis Kos') }}" />
                <x-jet-input id="jeniskos" class="block mt-1 w-full" type="text" name="jeniskos" :value="old('jeniskos')" required />
            </div>

            <div>
                <x-jet-label for="harga" value="{{ __('Harga') }}" />
                <x-jet-input id="harga" class="block mt-1 w-full" type="text" name="harga" :value="old('harga')" required />
            </div>

            <div>
                <x-jet-label for="penjaga" value="{{ __('Penjaga') }}" />
                <x-jet-input id="penjaga" class="block mt-1 w-full" type="text" name="penjaga" :value="old('penjaga')" required />
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
 
</div>
@endsection
            