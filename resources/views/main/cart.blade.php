@extends('layouts.main')

@section('content')
<div class="container mx-auto p-5 ">
    <div class="p-5 border border-gray-200 rounded-lg">
        <h1 class="text-3xl mb-3">My Cart Items</h1>
        <div class="bg-white rounded-lg p-3">
            <div>
                {{-- cart item --}}
            <div class="flex gap-4">
                <img src="{{ asset('assets/img/1_2.jpg') }}" alt="" class="w-36">
                <div class="flex flex-col justify-between w-full">
                    <div class="flex justify-between mb-3 gap-2">
                        <h3>Logitech G502 HERO High Performance Wired Gaming Mouse, HERO 25K
                            Sensor, 25,600 DPI, RGB, Adjustable Weights, 11</h3>
                        <span class="text-lg font-semibold">
                            $17.99
                        </span>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            Jumlah :
                            <div class="flex items-center gap-2 ml-3 py-1">
                                <button class="bg-purple-600 hover:bg-purple-700 active:bg-purple-800 text-white rounded w-8 h-8 font-bold" name="btnMinus">-</button>
                                <input class="outline outline-1 rounded outline-gray-200 focus:outline-purple-600 focus:shadow-purple-500 focus:shadow-sm w-8 h-8 text-center" type="text" value="1" name="jumlah">
                                <button class="bg-purple-600 hover:bg-purple-700 active:bg-purple-800 text-white rounded w-8 h-8 font-bold" name="btnPlus">+</button>
                            </div>
                        </div>
                        <a href="" class="text-purple-600 hover:text-purple-500">Remove </a>
                    </div>
                </div>
            </div>
            {{-- /cart item --}}
            <hr class="my-3">
            {{-- cart item --}}
            <div class="flex gap-4">
                <img src="{{ asset('assets/img/1_2.jpg') }}" alt="" class="w-36">
                <div class="flex flex-col justify-between w-full">
                    <div class="flex justify-between mb-3 gap-2">
                        <h3>Logitech G502 HERO High Performance Wired Gaming Mouse, HERO 25K
                            Sensor, 25,600 DPI, RGB, Adjustable Weights, 11</h3>
                        <span class="text-lg font-semibold">
                            $17.99
                        </span>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            Jumlah :
                            <div class="flex items-center gap-2 ml-3 py-1">
                                <button class="bg-purple-600 hover:bg-purple-700 active:bg-purple-800 text-white rounded w-8 h-8 font-bold" name="btnMinus">-</button>
                                <input class="outline outline-1 rounded outline-gray-200 focus:outline-purple-600 focus:shadow-purple-500 focus:shadow-sm w-8 h-8 text-center" type="text" value="1" name="jumlah">
                                <button class="bg-purple-600 hover:bg-purple-700 active:bg-purple-800 text-white rounded w-8 h-8 font-bold" name="btnPlus">+</button>
                            </div>
                        </div>
                        <a href="" class="text-purple-600 hover:text-purple-500">Remove </a>
                    </div>
                </div>
            </div>
            {{-- /cart item --}}
            </div>
            <div class="border-t border-gray-300 mt-5 pt-5">
                <div class="flex justify-between">
                    <span class="font-bold">Subtotal</span>
                    <span class="text-lg font-bold">$157.99</span>
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