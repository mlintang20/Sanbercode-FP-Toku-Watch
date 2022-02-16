@extends('layouts.master')

@section('title')
    Edit Item
@endsection

@section('content')
    <form action="/item/{{$item->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" value="{{$item->name}}" name="name" placeholder="Enter Name">
            @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div> 
        <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" value="{{$item->price}}" name="price" placeholder="Enter Price">
            @error('price')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Specs</label>
            <textarea name="specs" class="form-control" cols="30" rows="10">{{$item->specs}}</textarea>
            @error('specs')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Synopsis</label>
            <textarea name="synopsis" class="form-control" cols="30" rows="10">{{$item->synopsis}}</textarea>
            @error('synopsis')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Thumbnail</label>
            <input type="file" class="form-control" value="{{$item->thumbnail}}" name="thumbnail" placeholder="Enter Thumbnail">
            @error('thumbnail')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Category</label>
            <select class="form-control select" multiple="multiple" name="category[]">
                @foreach ($category as $temp)
                    <option value="{{$temp-> id}} "
                        @foreach ($item->category as $value)
                            @if($temp->id == $value->id)
                            selected
                            @endif
                        @endforeach
                            >{{$temp-> name}}</option>    
                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Update</button>

        
    </form>
@endsection

