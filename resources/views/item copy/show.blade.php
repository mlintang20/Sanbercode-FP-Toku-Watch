@extends('layouts.master')

@section('title')
    <h1 style="font-weight: bold;"> Detail Item</h1>
@endsection

@section('content')

<div class="container item-details" style="margin: 1% 0;">
    <div class="row">
            <div class="col-md-6 left-box">
                <h1 style="font-weight: bold;"> {{$item->name}} </h1>
                <h2 style="font-weight: bold; margin-top: 10px; margin-bottom: 10px;">¥ {{$item->price}}</h2>
                <h3 class="text-justify">Specs: <h3>
                <h3 class="text-justify mb-5">{{$item->specs}}</h3>
                <h3 class="text-justify">Sypnopsis: <h3>
                <h3 class="text-justify mb-5">{{$item->synopsis}}</h3>
                @foreach ($item->category as $tag)
                    <ul>
                        <li>
                            <h5>{{$tag->name }}</h5>
                        </li>
                    </ul>
                    @endforeach
                <hr>
                <h4>Reviews: </h4>
                @forelse ($item->review as $temp)
                    <div class="media bg-info my-2">
                        <div class="media-body">
                            <div class="form-inline">
                                <i class="fas fa-star"></i>
                                {{$temp->rating}}
                            </div>
                            <h5>" {{$temp->content}} "</h5>
                            <h6 class="m-2 d-flex justify-content-end"> By: {{$temp->user->name}}</h6>
                        </div>
                    </div>
                @empty
                    
                @endforelse

                @auth
                <hr>
                <h4>Add Review: </h4>
                    <form action="/review" method="POST">
                        @csrf
                        <input type="hidden" name="item_id" value="{{$item->id}}" id="">
                        <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Type something..."></textarea>
                        <div class="form-inline my-2">
                            <i class="fas fa-star"></i>
                            <input name="rating" type="number" class="form-control ml-2" name="price" placeholder="Enter Rating">
                        </div>
                        <input type="submit" class="btn btn-primary my-2" value="Add Review">
                    </form>
                @endauth
            </div>

            <div class="col-md-6 text-right " style="margin-bottom: 20px;">
                <img style="margin-bottom: 20px; margin-left: 500px;" src="{{asset('images/'.$item->thumbnail)}}" width = "500px" alt="">
            </div>
    </div>
</div>

@endsection

