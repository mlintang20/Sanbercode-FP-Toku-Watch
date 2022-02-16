@extends('layouts.master')

@section('title')
    Detail Category : {{$category->name}}
@endsection

@section('content')

<h1>{{$category->name}}</h1>

<!-- Menampilkan item berdasarkan category -->

<div class="row">
@forelse ($category->item as $temp)
<div class="col-lg-4">
    <div class="row justify-content-start">
        <div class="card mt-3 mx-3" style="width: 88%;">
            <img class="card-img-top" src="{{asset('images/'.$temp->thumbnail)}}" alt="Card image cap">
            <div class="card-body">
                <h5>{{$temp->name}}</h5>
                <h5>{{$temp->price}}</h5>
                <p class="card-text">{{ Str::limit($temp->specs, 125)}}</p>

                @auth
                        <form action="{{route('item.destroy', $temp->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{route('item.show', $temp->id)}}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{route('item.edit', $temp->id)}}" class="btn btn-warning btn-sm">Edit</a>
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                            <a href="{{route('cart.add', $temp->id)}}" class="btn btn-success btn-sm">
                                <i class="nav-icon fas fa-cart-plus"></i>
                                Add to cart
                            </a>
                        </form>

                        @endauth

                    @guest
                        <a href="{{route('item.show', $temp->id)}}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{route('cart.add', $temp->id)}}" class="btn btn-success btn-sm">
                            <i class="nav-icon fas fa-cart-plus"></i>
                            Add to cart
                        </a>
                    @endguest
                    
            </div>
        </div>
    </div>
</div>
@empty
    <h1> Tidak ada item dengan category ini </h1>
@endforelse

</div>

@endsection

