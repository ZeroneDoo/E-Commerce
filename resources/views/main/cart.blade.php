@extends('layouts.main')

@section('content')
<div class="container mx-auto p-5 ">
    <div class="p-5 border border-gray-200 rounded-lg">
        <h1 class="text-3xl mb-3">My Cart Items</h1>
        <div class="bg-white rounded-lg p-3">
            <div>
            {{-- cart item --}}
            @foreach ($dataBarang as $barang)  
            
            <div class="flex gap-4 hover:bg-gray-100 cursor-pointer p-5 rounded">
                <img src="{{ asset('storage/images/'.$barang->barang->image) }}" alt="" class="w-36" onclick="">
                <div class="flex flex-col justify-between w-full">
                    <div class="flex justify-between mb-3 gap-2" onclick="">
                        <h3>{{ $barang->barang->nama_barang }}</h3>
                        @php $jumlah =  $barang->barang->harga * $barang->jumlah;@endphp
                        <span class="text-lg font-semibold">
                            Rp {{ $jumlah }}
                        </span>
                        @php
                            $total += $jumlah
                        @endphp
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            Jumlah :
                            <div class="flex items-center gap-2 ml-3 py-1">
                                <button class="bg-purple-600 text-white rounded w-8 h-8 font-bold" name="btnKurang">-</button>
                                <input class="outline outline-1 rounded outline-gray-200 w-8 h-8 text-center" type="number" value="{{ $barang->jumlah }}" name="inputCount">
                                <button class="bg-purple-600 text-white rounded w-8 h-8 font-bold"  name="btnTambah">+</button>     
                            </div>
                        </div>
                        <a href="" class="text-purple-600 hover:text-purple-500">Remove </a>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            @endforeach
            {{-- /cart item --}}
            
            {{-- cart item --}}
            {{-- /cart item --}}
            </div>
            <div class="border-t border-gray-300 mt-5 pt-5">
                <div class="flex justify-between">
                    <span class="font-bold">Subtotal</span>
                    
                    <span class="text-lg font-bold">Rp {{ $total }}</span>
                </div>
                <div>
                    <p>Shipping and tax will be applied on checkout</p>
                </div>

                <button class="btn-primary w-full mt-3">Checkout</button>
            </div>
        </div>
    </div>
</div>
@endsection