@extends('layouts.main')

@section('content')
<div class=" w-[90vw] sm:w-[50vw] mx-auto mt-5 py-28 text-center bg-white border border-gray-200 rounded-lg shadow px-6 sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <h2 class="text-2xl font-semibold mb-2">Tambah Barang</h2>
    <hr class="mb-8 w-[20vw] mx-auto">

    <form action="{{ route('createBarang') }}" method="POST">
      @csrf
      <div class="mb-3">
        <input autocomplete="off" type="text" name="nama_barang" placeholder="Nama Barang" class="input-box-primary w-full @error('nama_barang') input-box-error @enderror" value="{{ old('nama_barang') }}">
        @error('nama_barang')
            <div class="w-full text-left">
              <small class="text-red-600">{{ $message }}</small>
            </div>
        @enderror
      </div>
      
      <div class="mb-3">
        <input autocomplete="off" type="number" name="harga" placeholder="Harga Barang" class="input-box-primary w-full @error('harga') input-box-error @enderror" value="{{ old('harga') }}">
        @error('harga')
            <div class="w-full text-left">
              <small class="text-red-600">{{ $message }}</small>
            </div>
        @enderror
      </div>
      
      <div class="mb-3">
        <input autocomplete="off" type="number" name="stok" placeholder="Stok Barang" class="input-box-primary w-full @error('stok') input-box-error @enderror" value="{{ old('stok') }}">
        @error('stok')
            <div class="w-full text-left">
              <small class="text-red-600">{{ $message }}</small>
            </div>
        @enderror
      </div>
      
      <div class="mb-3">
              
      </div>
      
      <div class="mb-3">
        <textarea autocomplete="off" type="number" name="deskripsi" placeholder="Deskripsi Barang" class="input-box-primary w-full @error('deskripsi') input-box-error @enderror" rows="7">{{ old('deskripsi') }}</textarea>
        @error('deskripsi')
            <div class="w-full text-left">
              <small class="text-red-600">{{ $message }}</small>
            </div>
        @enderror
      </div>
      
      <div class="mb-3">
        {{-- input file --}}
        <div class="flex items-center justify-center w-full">
          <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
              <div class="flex flex-col items-center justify-center pt-5 pb-6" id="box">
                  <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                  <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                  <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG</p>
              </div>
              <div id="result" class="w-full flex items-center justify-center"></div>
              {{-- <div id="result"></div> --}}
              <input autocomplete="off" id="dropzone-file" type="file" class="hidden" onchange="readURL(this)"/>
          </label>
        </div> 

      </div>
      
      <button class="btn-primary flex items-center w-full justify-center mt-3 ">
        Buat
      </button>
    </form>
</div>

@endsection