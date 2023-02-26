@extends('layouts.main')

@section('content')
<div class="container mx-auto p-5 ">
    <div class="p-5 border border-gray-200 rounded-lg">
        <h1 class="text-3xl mb-3">My Watchlist Items</h1>
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
                    <div class="flex justify-end items-center">
                        <a href="" class="text-purple-600 hover:text-purple-500">Remove </a>
                    </div>
                </div>
            </div>
            {{-- /cart item --}}
            <hr class="my-3">
            </div>
        </div>
    </div>
</div>
@endsection