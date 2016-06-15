@extends('layout')

@section('content')
    <div class="base__header">
        <h2 class="base__title">Unsubscribe</h2>
    </div>
    <div class="featured__container">
        <div class="featured__col">
            <h2 class="base__title">Please submit your e-mail below:</h2>
            {{ Form::open(array('class' => 'form', 'url' => '/customer/unsubscribe')) }}
            {{ csrf_field()}}

            {{ Form::label('email', 'E-mail:')}}
            {{ Form::text('email', null, ['placeholder' => 'JohnDoe@email.co.uk', 'required'])}}

            {{ Form::submit('unsubscribe', ['class' => 'base__button']) }}
            {{ Form::close() }}
        </div>
    </div>
@stop
