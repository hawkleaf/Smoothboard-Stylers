@extends('layout')

@section('content')
    <div class="base__header">
        <h2 class="base__title">{{$product->name}}</h2>
    </div>
    <div class="productShow__container">
        <div class="productShow__col">
            <img src="{{asset('/images/' . $product->thumbnail)}}" alt="" />
            <h2 class="base__title">{{$product->name}}</h2>
            <p><b>Description:</b></p>
            <p>{{$product->description}}</p>
        </div>
        <div class="productShow__col">
            <h3 class="base__title">Price: &#8364; {{$product->price}}</h3>
            <a href="/appointment/{{$product->id}}" class="base__button">Contact us</a>
        </div>
    </div>
@stop
