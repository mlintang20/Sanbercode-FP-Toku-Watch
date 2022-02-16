@extends('layouts.master')

@section('title')
    Item List 
@endsection

@section('content')
<h2 class="section-title">Item List</h2>
<p class="section-lead mb-4">
    Add, update, delete or view items on this page.
</p>
<div class="card" style="display: flex; margin-top: -10px">
    <div class="card-header">
        @auth
        <a href="{{route('item.create')}}" class="btn btn-primary" style="border-radius: 3px">
            <i class="nav-icon fas fa-plus-circle"></i>
            Add Item
        </a>
        @endauth
    </div>
</div>

@forelse ($item as $temp)

<div class="main-content">
    <section class="section">
        <div class="section-body">
            <h2 class="section-title">Articles</h2>
            <p class="section-lead">This article component is based on card and flexbox.</p>

            <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article">
                <div class="article-header">
                    <div class="article-image" data-background="{{asset('images/'.$temp->thumbnail)}}">
                    </div>
                    <div class="article-title">
                    <h2><a href="{{route('item.show', $temp->id)}}">{{$temp->name}}</a></h2>
                    </div>
                </div>
                <div class="article-details">
                    <h6>¥ {{$temp->price}}</h6>
                    <h6>Specs: </h6>
                    <h6>{{$temp->specs}}</h6>
                    <div class="article-cta">
                        @auth
                        <form action="{{route('item.destroy', $temp->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{route('item.show', $temp->id)}}" class="btn btn-info">Detail</a>
                            <a href="{{route('item.edit', $temp->id)}}" class="btn btn-warning">Edit</a>
                            <input type="submit" class="btn btn-danger" value="Delete">
                            <a href="{{route('cart.add', $temp->id)}}" class="btn btn-success">
                                <i class="nav-icon fas fa-cart-plus"></i>
                                Add to cart
                            </a>
                        </form>

                        @endauth

                    @guest
                        <a href="{{route('item.show', $temp->id)}}" class="btn btn-info">Detail</a>
                        <a href="{{route('cart.add', $temp->id)}}" class="btn btn-success">
                            <i class="nav-icon fas fa-cart-plus"></i>
                            Add to cart
                        </a>
                    @endguest    
                    </div>
                </div>
                </article>
            </div>
            </div>
        </div>
    </section>
</div>

@empty
<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card" style="display: flex; align-items: center;">
            <div class="card-header">
                <h4>Empty Data</h4>
            </div>
            <div class="card-body" data-width="100%">
                <div class="empty-state" data-height="100%">
                    <div class="empty-state-icon">
                        <i class="fas fa-question"></i>
                    </div>
                    <h2>We couldn't find any item</h2>
                    <p class="lead">
                        Sorry we can't find any data, to get rid of this message, make at least 1 entry.
                    </p>
                    @auth
                    <a href="{{route('item.create')}}" class="btn btn-primary mt-4">
                        <i class="nav-icon fas fa-plus-circle"></i> 
                        Create a new item</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endforelse

@endsection 