@extends('layouts.app')


@section('content')
    <h1 class="text-center">Create Todo</h1>
    <div class="container">
        {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
        {{ Form::bsText('text') }}
        {{ Form::bsTextArea('body') }}
        {{ Form::bsText('due') }}
        {{ Form::bsSubmit('Submit', ['class'=>'btn btn-primary']) }}
        {!! Form::close() !!}
    </div>
@endsection