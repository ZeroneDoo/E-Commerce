@extends('layouts.main')

@section('content')
<div class="w-[400px] mx-auto mt-8 py-32 text-center">
  <h2 class="text-2xl font-semibold mb-2">Enter or Email to reset password</h2>
  <p class="mb-4">or <a href="{{ route('login') }}" class="text-purple-600 hover:text-purple-500 ">login with existing account</a></p>

  <form action="">
    @csrf
    <div class="mb-3">
      <input type="email" name="email" placeholder="Your Email" class="input-box-primary w-full">
    </div>
    
    <button class="btn-primary flex items-center w-full justify-center mt-3 ">
      Submit
    </button>
  </form>

</div>
@endsection