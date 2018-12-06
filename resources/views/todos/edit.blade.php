@extends('layouts.app')

@section('content')
    <h1 class="text-center">Edit Todo</h1>
    {!! Form::open(['action' => ['TodosController@update', $todo->id],'method' => 'POST']) !!}
    @method('PUT')
        {{Form::bsText('text', $todo->text)}}
        {{Form::bsTextArea('body', $todo->body)}}
        {{Form::bsText('due', $todo->due)}}
        {{--{{Form::hidden('_method', 'PUT')}}--}}
        {{Form::bsSubmit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection