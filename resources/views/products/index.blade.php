@extends('layout')

@section('content')
<div class="base__header">
    <h2 class="base__title">Onze producten:</h2>
</div>
<div class="productIndex__container">
    @foreach ($products as $product)
        <a href="{{ action('ProductController@show', $product->id) }}" class="productIndex__item pjax">
            <img src="{{asset('/images/' . $product->thumbnail)}}" alt="" />
            <h3 class="base__title">{{$product->name}}</h3>
            <h4 class="base__title">&#8364; {{$product->price}}</h4>
        </a>
    @endforeach
</div>
@stop
