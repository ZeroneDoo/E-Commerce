@extends('layouts.main')

@section('content')
<div class="w-[300px] sm:w-[400px] mx-auto mt-5 py-28 text-center">
  <h2 class="text-2xl font-semibold mb-2">Login to your account</h2>
  <p class="mb-4">or <a href="{{ route('register') }}" class="text-purple-600 hover:text-purple-500 ">create new one</a></p>

  <form action="{{ route('postLogin') }}" method="POST">
    @csrf
    <div class="mb-3">
      <input autocomplete="off" type="text" name="email" placeholder="Your Email" class="input-box-primary w-full @error('email') input-box-error @enderror" value="{{ old('email') }}">
      @error('email')
          <div class="w-full text-left">
            <small class="text-red-600">{{ $message }}</small>
          </div>
      @enderror
    </div>
    
    <div class="mb-3">
      <input autocomplete="off" type="password" name="password" placeholder="Your Password" class="input-box-primary w-full @error('password') input-box-error @enderror">
      @error('password')
          <div class="w-full text-left">
            <small class="text-red-600">{{ $message }}</small>
          </div>
      @enderror
    </div>

    <div class="mb-3 flex justify-between items-center">
      <div class="flex items-center ">
        <input type="checkbox" name="remember" class="input-checkbox mr-3">
        <label for="remember">Remember Me</label>
      </div>
      <a href="{{ route('resetPassword') }}" class="text-purple-600 hover:text-purple-700">Reset Your Password</a>
    </div>
    
    <button class="btn-primary flex items-center w-full justify-center mt-3 ">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
      Login
    </button>
  </form>

  <hr class="my-3">

  <div class="">
    <a href="" class="border border-gray-200 rounded-lg w-full p-3 block hover:bg-gray-200 transition-colors ">Google</a>
  </div>

</div>
@endsection