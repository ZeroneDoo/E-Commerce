@extends('layouts.main')

@section('content')
<div class="w-[400px] mx-auto mt-8 py-20 text-center">
  <h2 class="text-2xl font-semibold mb-2">Create new account</h2>
  <p class="mb-4">or <a href="{{ route('login') }}" class="text-purple-600 hover:text-purple-500 ">login with existing one</a></p>

  <form action="">
    @csrf
    <div class="mb-3">
      <input autocomplete="off" type="text" name="username" placeholder="Your Username" class="input-box-primary w-full">
    </div>
    
    <div class="mb-3">
      <input autocomplete="off" type="email" name="email" placeholder="Your Email" class="input-box-primary w-full">
    </div>
    
    <div class="mb-3">
      <input autocomplete="off" type="password" name="password" placeholder="Your Password" class="input-box-primary w-full">
    </div>
    
    <div class="mb-3">
      <input autocomplete="off" type="password" name="reapeat" placeholder="Reapeat Password" class="input-box-primary w-full">
    </div>
    
    <button class="btn-primary flex items-center w-full justify-center mt-3 ">
      Signup
    </button>
  </form>

</div>
@endsection