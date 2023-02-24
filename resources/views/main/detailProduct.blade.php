@extends('layouts.main')

@section('content')
{{-- Product Item --}}
<div class="grid grid-cols-5 gap-6 py-48 px-5">
    <div class="col-span-3">
        <div class="aspect-square flex items-center justify-center">
            <img src="{{ asset('assets/img/1_2.jpg') }}" alt="">
        </div>
        <div class="flex relative">
            <span class="flex items-center text-white absolute z-10 top-0 left-0 h-full px-2 bg-black/10 hover:bg-black/20 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 010-1.06l7.5-7.5a.75.75 0 111.06 1.06L9.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5z" clip-rule="evenodd" />
                </svg>
            </span>
            <span class="flex items-center text-white absolute z-10 top-0 right-0 h-full px-2 bg-black/10 hover:bg-black/20 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
                </svg>  
            </span>
            <a href="" class="border border-gray-200 transition-colors hover:border-purple-600 flex items-center justify-center"><img src="{{ asset('assets/img/1_1.jpg') }}" class="w-16" alt=""></a>
            <a href="" class="border border-gray-200 transition-colors hover:border-purple-600 flex items-center justify-center"><img src="{{ asset('assets/img/1_2.jpg') }}" class="w-16" alt=""></a>
            <a href="" class="border border-gray-200 transition-colors hover:border-purple-600 flex items-center justify-center"><img src="{{ asset('assets/img/1_3.jpg') }}" class="w-16" alt=""></a>
            <a href="" class="border border-gray-200 transition-colors hover:border-purple-600 flex items-center justify-center"><img src="{{ asset('assets/img/1_4.jpg') }}" class="w-16" alt=""></a>
        </div>
    </div>

    <div class="col-span-2">
        <h1 class="text-lg font-semibold">
            Logitech G502 HERO High Performance Wired Gaming Mouse, HERO 25K
            Sensor, 25,600 DPI, RGB, Adjustable Weights, 11
        </h1>

        <p class="text-lg font-bold mb-3">
            $17.99
        </p>

        <p class="mb-3">
            Stok 27
        </p>

        <div class="flex items-center mb-3">
            <p class="flex items-center text-orange-400">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                </svg>                            
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                </svg>              
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                </svg>

            </p>
            <p class="ml-3">
                4,5rb Terjual
            </p>
        </div>

        <div class="flex justify-between items-center mb-3">
            <label for="">Quantity</label>
            <div class="flex items-center gap-2">
              <button class="bg-purple-600 text-white rounded w-8 h-8 font-bold">-</button>
              <input class="outline outline-1 rounded outline-gray-200 w-8 h-8 text-center" type="number" name="" id="">
              <button class="bg-purple-600 text-white rounded w-8 h-8 font-bold">+</button>
            </div>
        </div>

        <div class="flex items-center gap-5">
          <button class="flex justify-center items-center btn-primary-2 w-full "> 
              Buy Now
          </button>
          <button class="flex justify-center items-center btn-primary w-full "> 
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
              </svg>      
              Add to Cart
          </button>
        </div>

        <hr class="my-5">
        
        <div class="wysiwyg-editor">
            <table>
                <tbody>
                  <tr>
                    <td>Connectivity Technology</td>
                    <td>USB</td>
                  </tr>
                  <tr>
                    <td>Recommended Uses For Product</td>
                    <td>Gaming</td>
                  </tr>
                  <tr>
                    <td>Brand</td>
                    <td>Logitech G</td>
                  </tr>
                  <tr>
                    <td>Compatible Devices</td>
                    <td>Personal Computer</td>
                  </tr>
                  <tr>
                    <td>Series</td>
                    <td>Logitech G502 HERO High Performance Gaming Mouse</td>
                  </tr>
                </tbody>
              </table>

              <p class="">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Deserunt suscipit natus quisquam optio voluptatem quo beatae ex
                similique, pariatur laborum asperiores explicabo delectus culpa
                cumque corrupti quasi incidunt at quos!
              </p>
              <h4>About the item</h4>
              <ul class="list-disc pl-6">
                <li>
                  Hero 25K sensor through a software update from G HUB, this
                  upgrade is free to all players: Our most advanced, with 1:1
                  tracking, 400-plus ips, and 100 - 25,600 max dpi sensitivity
                  plus zero smoothing, filtering, or acceleration
                </li>
                <li>
                  11 customizable buttons and onboard memory: Assign custom
                  commands to the buttons and save up to five ready to play
                  profiles directly to the mouse
                </li>
                <li>
                  Adjustable weight system: Arrange up to five removable 3.6
                  grams weights inside the mouse for personalized weight and
                  balance tuning
                </li>
                <li>
                  Programmable RGB Lighting and Lightsync technology: Customize
                  lighting from nearly 16.8 million colors to match your team's
                  colors, sport your own or sync colors with other Logitech G
                  gear
                </li>
                <li>
                  Mechanical switch button tensioning: Metal spring tensioning
                  system and pivot hinges are built into left and right gaming
                  mouse buttons for a crisp, clean click feel with rapid click
                  feedback
                </li>
              </ul>
        </div>
    </div>
</div>
{{-- /Product Item --}}
@endsection