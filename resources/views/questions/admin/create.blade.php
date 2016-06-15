@extends('adminPanel.admin')

@section('content')
    <div class="base__bar">
        <h2 class="base__title">Add Question</h2>
    </div>

    {{ Form::open(['class' => 'form pjax-form', 'route' => 'question.store', 'method' => 'POST'])}}
    {{ csrf_field() }}
    {{ Form::label('question', 'Question:')}}
    {{ Form::textarea('question', null, ['placeholder' => 'Your Question...', 'required'])}}

    {{ Form::label('answer', 'Answer:')}}
    {{ Form::textarea('answer', null, ['placeholder' => 'Your Answer...', 'required'])}}

    {{ Form::submit('Add Question', ['class' => 'base__button'])}}
    {{Form::close()}}
@stop
