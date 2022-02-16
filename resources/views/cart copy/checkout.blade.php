@extends('layouts.master')

@section('title')
    Checkout
@endsection

@section('content')
<form action="{{route('cart_order.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$profile->user->name}}">
        @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="items">Shipping Address</label>
        <input type="text" class="form-control" name="shipping_address" placeholder="Address">
        @error('address')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    </div>
    <div class="form-group">
        <label>Total Price: ¥ {{Cart::session(auth()->id())->getTotal()}}</label>
    </div>
    <div class="form-group">
        <label>Shipping Cost: ¥ {{$cart_order->shipping_cost}}</label>
    </div>
    <button type="submit" class="btn btn-success">Checkout</button>
</form>
@endsection 