@extends('adminPanel.admin')

@section('content')
<div class="base__bar">
    <h2 class="base__title">All Products</h2>
    <a href="/product/create" class="pjax"><i class="material-icons">add_circle</i> Product</a>
</div>
<div class="detailedList__container">
    <div class="detailedList__details">
        <span class="child">Name</span>
        <span class="child">Price</span>
        <span class="child">Image</span>
    </div>
    @foreach ($products as $product)
        <div class="detailedList__item">
            <span class="child">{{$product->name}}</span>
            <span class="child">&#8364; {{$product->price}}</span>
            <span class="child">{{$product->thumbnail}}</span>
            <div class="detailedList__item--buttons">
                <a href="{{ action('ProductController@edit', $product->id) }}" class="material-icons pjax">edit</a>
                <a href="javascript:checkDelete('/product/',{{$product->id}})" class="material-icons">delete</a>
            </div>
        </div>
    @endforeach
</div>
@stop

@section('footer')
@stop
