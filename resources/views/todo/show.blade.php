@extends('layouts.custom')

@section('content')
    <a href="/todo" class="pr-5 text-secondary">Go back</a>
    <h3>{{$todo->text}}</h3>
    <span class="badge-danger w-auto">{{$todo->due}}</span>
    <hr>
        <p>{{$todo->body}}</p>
    <br><br>
    <div class="d-inline-flex">
        <a class="btn btn-info mr-3" href="/todo/{{$todo->id}}/edit">Edit</a>
        <form action="{{ action('TodoController@destroy' , $todo->id ) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection