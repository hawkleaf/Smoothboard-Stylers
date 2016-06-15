@extends('adminPanel.admin')

@section('content')
    <div class="base__bar">
        <h2 class="base__title">All Questions</h2>
        <a href="/question/create" class="pjax"><i class="material-icons">add_circle</i> Question</a>
    </div>
    <div class="detailedList__container">
        <div class="detailedList__details">
            <span class="child">Question</span>
            <span class="child">Answer</span>
        </div>
        @foreach ($questions as $question)
            <div class="detailedList__item">
                <span class="child">{{$question->question}}</span>
                <span class="child">{{$question->answer}}</span>
                <div class="detailedList__item--buttons">
                    <a href="{{ action('QuestionController@edit', $question->id) }}" class="material-icons pjax">edit</a>
                    <a href="javascript:checkDelete('/question/',{{$question->id}})" class="material-icons">delete</a>
                </div>
            </div>
        @endforeach
    </div>
@stop
