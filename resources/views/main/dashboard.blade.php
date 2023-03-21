{{-- dashboard --}}

@extends('layouts.main')

@section('content')
{{-- Product List --}}
<div class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 p-5">
    {{-- Product Item --}}
    @foreach ($dataBarang as $barang)    
        <div class="bg-white shadow-md hover:shadow-xl stroke-black p-3 rounded-md border border-gray-200 hover:scale-[1.02] transition-all">
            <a href="{{ route('detailProduct', ['id' => $barang->id]) }}">
                <img src="{{ asset('storage/images/'.$barang->image) }}" alt="" class="rounded-t">
            </a>
            <div class="p-3">
                <h3>
                    <a href="{{ route('detailProduct', ['id' => $barang->id]) }}" class="text-gray-600 hover:text-black">
                        {{$barang->nama_barang}}
                    </a>
                </h3>

                <div class="flex flex-col">
                    <p class="text-xl font-bold">@if(auth()->check() && auth()->user()->role == "admin") {{ $barang->stok }} Stok Barang Yang Tersedia @elseif(!auth()->check() || auth()->user()->role == "user") Rp {{ $barang->harga }} @endif</p>
                    <div class="flex justify-between mt-3">
                        <button class="flex items-center justify-center text-purple-700 w-10 h-10 hover:text-white hover:bg-purple-700 transition-colors rounded-full border-2 border-purple-700 active:bg-purple-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>  
                        </button>
                        <form action="{{ route('addToCart',['id'=>$barang->id]) }}" method="post">
                            @csrf
                            <button type="submit" class="flex items-center btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>                    
                                Add to Cart      
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- /Product Item --}}
</div>
{{-- /Product List --}}
@endsection