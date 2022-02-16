@extends('layouts.master')

@section('title')
    <h1 style="font-weight: bold;"> Profile Details</h1>
@endsection

@section('content')

<div class="container profile-details" style="margin: 1% 0;">
    <div class="row">
            <div class="col-md-6 left-box">
                <h1 style="font-weight: bold;"> {{$profile->user->name}} </h1>
                <h2 style="font-weight: bold; margin-top: 10px; margin-bottom: 10px;">{{$profile->user->email}}</h2>
                <h3 class="text-justify">Address: <h3>
                <h3 class="text-justify mb-5">{{$profile->address}}</h3>
                <h3 class="text-justify">Phone: <h3>
                <h3 class="text-justify mb-5">{{$profile->phone}}</h3>
            </div>
            
           
    </div>
    <a href="{{route('profile.edit', $profile->id)}}" class="btn btn-warning btn-lg">Edit</a>
</div>

@endsection

