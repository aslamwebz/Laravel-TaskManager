@extends('layouts.app')

@section('content')
    <h1>{{$todo->text}}</h1>
    <span class="text-white bg-danger mb-3">{{$todo->due}}</span>
    <hr>
    <p class="lead">{{$todo->body}}</p>
    <br><br>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>    <a href="/" class="btn btn-primary">Go Back</a>

    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'float-right']) !!}
    @method('DELETE')
    {{ Form::bsSubmit('Delete', ['class'=>'btn btn-danger']) }}
    {!! Form::close() !!}

@endsection