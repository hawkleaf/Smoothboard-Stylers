@extends('adminPanel.admin')

@section('content')
    <div class="base__bar">
        <h1>Add a new Product</h1>
    </div>
    {{ Form::open(array('class' => 'form', 'route' => 'product.store', 'files' => 'true')) }}

    {{ csrf_field() }}

    {{ Form::label('name', 'Name:') }}
    {{ Form::text('name', null, ['placeholder' => 'Product Name', 'required']) }}

    {{ Form::label('description', 'Description:')}}
    {{ Form::textarea('description', null, ['placeholder' => 'What do I look like?', 'required']) }}

    {{ Form::label('price', 'Price:') }}
    {{ Form::number('price', null, ['placeholder' => 'Price', 'required']) }}

    {{ Form::label('thumbnail', 'Thumbnail:') }}
    {{ Form::file('thumbnail') }}

    {{ Form::submit('Add Product', ['class' => 'base__button']) }}

    {{ Form::close() }}
@stop
