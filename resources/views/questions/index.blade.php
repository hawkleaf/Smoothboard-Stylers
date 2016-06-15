@extends('layout')

@section('content')
<div class="base__header">
    <h2 class="base__title">Frequently Asked Questions</h2>
</div>
<div class="question__container">
    @foreach ($questions as $question)
        <div class="question">
            <h3 class="base__title">{{$question->question}}</h3>
            <p>
                {{$question->answer}}
            </p>
        </div>
    @endforeach
</div>
@stop
