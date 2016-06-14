@extends('layout')

@section('content')
    <div class="base__header">
        <h2 class="base__title">Newsletter sign-up form</h2>
    </div>
    <div class="featured__container">
        <div class="featured__col">
            <h2 class="base__title">Please fill in this form:</h2>
            {{ Form::open(array('class' => 'form', 'route' => 'customer.store')) }}
            {{ csrf_field() }}

            {{ Form::label('firstname', 'First Name:') }}
            {{ Form::text('firstname', null, ['placeholder' => 'John', 'required']) }}

            {{ Form::label('surname', 'Surname:') }}
            {{ Form::text('surname', null, ['placeholder' => 'Doe', 'required']) }}

            {{ Form::label('email', 'Your email:') }}
            {{ Form::text('email', null, ['placeholder' => 'JohnDoe@email.co.uk', 'required']) }}

            {{ Form::label('gender', 'Gender:') }}
            {{ Form::select('gender', array('male' => 'Male', 'female' => 'Female', 'other' => 'Other'), null, ['placeholder' => 'Select your gender', 'required']) }}

            {{ Form::label('country', 'Country of residence:') }}
            {{ Form::text('country', null, ['placeholder' => 'Select Country', 'required']) }}

            {{ Form::submit('Sign up!', ['class' => 'base__button']) }}

            {{ Form::close() }}
        </div>
        <div class="featured__col">
            <h2 class="base__title">Why subscribe to our newsletter?</h2>
            <p>
                Lorizzle sizzle dolizzle sit its fo rizzle, rizzle adipiscing crunk. Nullizzle fo shizzle velit, we gonna chung volutpizzle, i'm in the shizzle check out this, gravida vel, pimpin'. Pellentesque funky fresh dizzle. Sizzle eros. Bling bling izzle dolor dapibus dizzle tempizzle mofo. Maurizzle pellentesque nibh ghetto that's the shizzle. Vestibulum izzle tortizzle. Pellentesque eleifend rhoncizzle nisi. In mofo habitasse check out this dictumst. The bizzle its fo rizzle. Curabitizzle tellizzle cool, own yo' hizzle, mattis shizznit, eleifend vitae, nunc. Crackalackin suscipizzle. Yo da bomb velit sed purus.
            </p>
        </div>
    </div>
@stop
