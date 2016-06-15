@extends('adminPanel.admin')

@section('header')

@stop

@section('content')
    <div class="base__bar">
        <h2 class="base__title">Customers</h2>
    </div>
    <div class="detailedList__container">
        <div class="detailedList__details">
            <span class="child">Name:</span>
            <span class="child">E-mail:</span>
            <span class="child">Country of Residence:</span>
            <span class="child">Gender:</span>
        </div>
        @foreach ($customers as $customer)
            <div class="detailedList__item">
                <span class="child">{{ $customer->firstname . " " . $customer->surname }}</span>
                <span class="child">{{ $customer->email }}</span>
                <span class="child">{{ $customer->country }}</span>
                <span class="child">{{ $customer->gender }}</span>
                <div class="detailedList__item--buttons">
                    <a href="javascript:checkDelete('/customer/',{{$customer->id}})" class="material-icons">delete</a>
                </div>
            </div>
        @endforeach
    </div>
@stop
@section('footer')
@stop
