@extends('layouts.main')

@section('content')
<div class="w-[300px] sm:w-[400px] mx-auto mt-5 py-28 text-center">
  <h2 class="text-2xl font-semibold mb-2">Tambah Barang</h2>

  <form action="{{ route('createBarang') }}" method="POST">
    @csrf
    <div class="mb-3">
      <input type="text" name="nama_barang" placeholder="Nama Barang" class="input-box-primary w-full @error('nama_barang') input-box-error @enderror" value="{{ old('nama_barang') }}">
      @error('nama_barang')
          <div class="w-full text-left">
            <small class="text-red-600">{{ $message }}</small>
          </div>
      @enderror
    </div>
    
    <div class="mb-3">
      <input type="number" name="harga" placeholder="Harga Barang" class="input-box-primary w-full @error('harga') input-box-error @enderror" value="{{ old('harga') }}">
      @error('harga')
          <div class="w-full text-left">
            <small class="text-red-600">{{ $message }}</small>
          </div>
      @enderror
    </div>
    
    <div class="mb-3">
      <input type="number" name="stok" placeholder="Stok Barang" class="input-box-primary w-full @error('stok') input-box-error @enderror" value="{{ old('stok') }}">
      @error('stok')
          <div class="w-full text-left">
            <small class="text-red-600">{{ $message }}</small>
          </div>
      @enderror
    </div>
    
    <div class="mb-3">
      <div  class="p-2 px-3 rounded border border-gray-200 shadow-md w-full">
        <div class="flex items-center justify-between">
            <p>Detail Barang</p>
            <p  class="flex items-center justify-center cursor-pointer text-purple-700 w-8 h-8 hover:text-white hover:bg-purple-700 transition-colors rounded-full border-2 border-purple-700 active:bg-purple-800" onclick="tambahDetail()">+</p>
        </div>

        {{-- input detail --}}
        <div id="contain_details">
            {{-- <div class="mt-3 hidden" name="form_details">
                <hr class="my-3">
                <div class="flex items-center justify-between gap-3">
                    <div class="flex items-center justify-between gap-3">
                        <input type="text" name="judul_detail" placeholder="Judul Detail" class="input-box-primary w-full @error('judul_detail') input-box-error @enderror" value="{{ old('judul_detail') }}">
                        @error('judul_detail')
                            <div class="w-full text-left">
                                <small class="text-red-600">{{ $message }}</small>
                            </div>
                            
                        @enderror
    
                        <input type="text" name="isi_detail" placeholder="Isi Detail" class="input-box-primary w-full @error('isi_detail') input-box-error @enderror" value="{{ old('isi_detail') }}">
                        @error('isi_detail')
                            <div class="w-full text-left">
                                <small class="text-red-600">{{ $message }}</small>
                            </div>
                            
                        @enderror
                    </div>
    
                    <p  class="flex items-center justify-center cursor-pointer text-purple-700 w-6 h-6 hover:text-white hover:bg-purple-700 transition-colors rounded-full border-2 border-purple-700 active:bg-purple-800">x</p>
                </div>
            </div> --}}
        </div>
        {{-- /input detail --}}

      </div>
      
      
    </div>
    
    <div class="mb-3">
      <input type="number" name="harga" placeholder="Harga Barang" class="input-box-primary w-full @error('harga') input-box-error @enderror" value="{{ old('harga') }}">
      @error('harga')
          <div class="w-full text-left">
            <small class="text-red-600">{{ $message }}</small>
          </div>
      @enderror
    </div>
    
    <div class="mb-3">
      <input type="number" name="harga" placeholder="Harga Barang" class="input-box-primary w-full @error('harga') input-box-error @enderror" value="{{ old('harga') }}">
      @error('harga')
          <div class="w-full text-left">
            <small class="text-red-600">{{ $message }}</small>
          </div>
      @enderror
    </div>
    
    <button class="btn-primary flex items-center w-full justify-center mt-3 ">
      Buat
    </button>
  </form>

</div>
@endsection