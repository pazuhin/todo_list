@extends('layouts.custom')

@section('content')
    <h1>Edit Todo</h1>
    <form method="POST" action="{{action('TodoController@update', $todo->id)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="text" style="font-size: 20px;"></label>
            <input type="text" class="form-control" id="text" name="text" value="{{$todo->text}}">
        </div>
        <div class="form-group">
            <label for="body" style="font-size: 20px;"></label>
            <textarea class="form-control" id="body" name="body">{{$todo->body}}</textarea>
        </div>
        <div class="form-group">
            <label for="due" style="font-size: 20px;"></label>
            <input type="text" class="form-control" id="due" name="due" value="{{$todo->due}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
