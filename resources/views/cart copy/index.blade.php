@extends('layouts.master')

@section('title')
    Your Cart
@endsection

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cartItems as $temp)
        <tr>
            <td scope="row">{{ $temp->name }}</td>
            <td>{{ $temp->price }}</td>
            <td>
                <form action="{{route('cart.update', $temp->id)}}">
                    <input name="quantity" type="number" value="{{ $temp->quantity }}">
                    <input type="submit" value="save" class="btn btn-success btn-sm">
                </form>
            </td>
            <td>
                {{Cart::session(auth()->id())->get($temp->id)->getPriceSum()}}
            </td>
            <td>
               <a href="{{route('cart.destroy', $temp->id)}}" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<h3>Total Price: ¥ {{Cart::session(auth()->id())->getTotal()}}</h3>
<a href="{{route('cart.checkout')}}" class="btn btn-primary d-flex justify-content-center"> Proceed to Checkout </a>
@endsection 