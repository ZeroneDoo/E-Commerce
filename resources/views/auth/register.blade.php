@extends('layouts.main')

@section('content')
    <div
        class="w-[90vw] sm:w-[50vw] mx-auto mt-5 py-28 text-center bg-white border border-gray-200 rounded-lg shadow px-6 sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h2 class="text-2xl font-semibold mb-2">Create new account</h2>
        <p class="mb-4">or <a href="{{ route('login') }}" class="text-purple-600 hover:text-purple-500 ">login with existing
                one</a></p>

        <form action="{{ route('postRegister') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input autocomplete="off" type="text" name="username" value="{{ old('username') }}" placeholder="Your Username"
                    class="input-box-primary w-full @error('username') input-box-error @enderror">
                @error('username')
                    <div class="w-full text-left">
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <select class="input-box-primary  @error('jenis_kelamin') input-box-error @enderror w-full" name="jenis_kelamin">
                    <option value="" selected hidden>Jenis Kelamin</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
                @error('jenis_kelamin')
                    <div class="w-full text-left">
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <input autocomplete="off" type="email" name="email" value="{{ old('email') }}" placeholder="Your Email"
                    class="input-box-primary w-full @error('email') input-box-error @enderror">
                @error('email')
                    <div class="w-full text-left">
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <input autocomplete="off" type="password" name="password" placeholder="Your Password"
                    class="input-box-primary w-full @error('password') input-box-error @enderror">
                @error('password')
                    <div class="w-full text-left">
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <input autocomplete="off" type="password" name="reapeat" placeholder="Reapeat Password"
                    class="input-box-primary w-full @error('reapeat') input-box-error @enderror">
                @error('reapeat')
                    <div class="w-full text-left">
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>

            <button class="btn-primary flex items-center w-full justify-center mt-3 ">
                Signup
            </button>
        </form>

        <hr class="my-3">

        <div class="">
            <button onclick="location.href=``" class="group w-full h-12 px-6 border border-gray-300 rounded-lg transition duration-300 hover:border-purple-400 focus:bg-purple-50 active:bg-purple-100">
                <div class="relative flex items-center space-x-4 justify-center">
                    <img src="https://tailus.io/sources/blocks/social/preview/images/google.svg" class="absolute left-0 w-5" alt="google logo">
                    <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-purple-600 sm:text-base">Continue with Google</span>
                </div>
            </button>
        </div>

    </div>
@endsection
