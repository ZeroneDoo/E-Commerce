@extends('layouts.main')

@section('content')
<div class="container mx-auto p-5 ">
    <div class="p-5 border border-gray-200 rounded-lg">
        <h1 class="text-3xl mb-3">My Orders</h1>
        <div class="bg-white rounded-lg p-3">
            <table>
                <thead>
                    <tr>
                        <th>Order #</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Subtotal</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection