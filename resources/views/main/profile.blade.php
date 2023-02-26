@extends('layouts.main')

@section('content')
<div class="container mx-auto p-5 pt-20">
    <div class="grid grid-cols-3 gap-6">
        <div class="p-3 shadow rounded-lg col-span-2">
            <h2 class="text-xl font-semibold mb-2">Profile Details</h2>
            
            <div class="mb-3">
                <input type="text" name="username" placeholder="Your Username" class="input-box-primary w-full">
            </div>
            
            <div class="mb-3">
                <input type="email" name="email" placeholder="Your Email" class="input-box-primary w-full">
            </div>
            
            <div class="mb-3">
                <input type="number" name="phone" placeholder="Your Phone" class="input-box-primary w-full">
            </div>

            <h2 class="text-xl mt-5 font-semibold mb-2">Billing Address</h2>
            <div class="grid grid-cols-2 gap-3 mb-3">
                <div>
                    <input type="text" name="" placeholder="Address 1" class="input-box-primary w-full">
                </div>
                <div>
                    <input type="text" name="" placeholder="Address 2" class="input-box-primary w-full">
                </div>
            </div>
            <div class="grid grid-cols-2 gap-3 mb-3">
                <div >
                    <input type="text" name="" placeholder="City" class="input-box-primary w-full">
                </div>
                <div>
                    <input type="text" name="" placeholder="State" class="input-box-primary w-full">
                </div>
            </div>
            <div class="grid grid-cols-2 gap-3 mb-3">
                <div>
                    <select name="" id="" class="w-full p-2 outline outline-2 outline-gray-200 rounded focus:outline-purple-600">
                        <option value="" selected hidden>Select Country</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>
                <div>
                    <input type="text" name="" placeholder="ZipCode" class="input-box-primary w-full">
                </div>
            </div>
        </div>
        
        
        <div class="p-3 shadow rounded-lg">
            <h2 class="text-2xl font-semibold mb-2">Update Password</h2>
            
            <div class="mb-3">
                <input type="password" name="password" placeholder="Your Current Password" class="input-box-primary w-full">
            </div>
            
            <div class="mb-3">
                <input type="password" name="new" placeholder="New Password" class="input-box-primary w-full">
            </div>
            
            <div class="mb-3">
                <input type="password" name="repeat" placeholder="Repeat New Password" class="input-box-primary w-full">
            </div>
            
            <button class="btn-primary w-full">Update</button>
        </div>
    </div>
</div>
@endsection