@extends('adminPanel.admin')

@section('content')
    <div class="base__bar">
        <h1 class="base__title">Edit Question</h1>
    </div>

    {{ Form::open(array('class' => 'form pjax-form', 'route' => ['question.update', $question->id], 'method' => 'PUT'))}}
    {{ csrf_field() }}
    {{ Form::label('question', 'Question:')}}
    {{ Form::textarea('question', $question->question, ['required'])}}

    {{ Form::label('answer', 'Answer:')}}
    {{ Form::textarea('answer', $question->answer, ['required'])}}

    {{ Form::submit('Save Changes', ['class' => 'base__button'])}}
    {{ Form::close() }}
@stop
