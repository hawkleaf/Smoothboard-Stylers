@extends('layout')

@section('content')
<div class="featured__container">
    <div class="featured__col">
        <h2 class="base__title">Appointment Form</h2>
        <p>
            Thanks for your interest in our <i>{{$product->name}}</i>! Fill in the form below to sign up for an appointment where we can discuss your personal needs.
        </p>
        {{ Form::open(array('class' => 'form', 'url' => '/appointment/' . $product->id,)) }}

        {{ Form::label('name', 'Your name:') }}
        {{ Form::text('name', null, ['placeholder' => 'John Doe...', 'required']) }}

        {{ Form::label('email', 'Your Email address:') }}
        {{ Form::text('email', null, ['placeholder' => 'Snakes@mutherf*ckingplane.co.uk', 'required']) }}

        {{ Form::submit('Make appointment', ['class' => 'base__button']) }}

        {{ Form::close() }}
    </div>
</div>
@stop
