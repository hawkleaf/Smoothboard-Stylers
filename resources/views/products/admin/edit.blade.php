@extends('adminPanel.admin')

@section('content')
    <div class="base__bar">
        <h1>Edit product: <i>"{{$product->name}}"</i></h1>
    </div>
    {{ Form::open(array('class' => 'form', 'route' => ['product.update', $product->id], 'files' => 'true', 'method' => 'PUT')) }}

    {{ csrf_field() }}

    {{ Form::label('name', 'Name:') }}
    {{ Form::text('name', $product->name, ['placeholder' => 'Product Name', 'required']) }}

    {{ Form::label('description', 'Description:')}}
    {{ Form::textarea('description', $product->description, ['placeholder' => 'What do I look like?', 'required']) }}

    {{ Form::label('price', 'Price:') }}
    {{ Form::number('price', $product->price, ['placeholder' => 'Price', 'required']) }}

    {{ Form::label('thumbnail', 'Thumbnail (leave blank for no change):') }}
    {{ Form::file('thumbnail') }}

    {{ Form::submit('Save Changes', ['class' => 'base__button']) }}

    {{ Form::close() }}
@stop
