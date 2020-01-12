@extends('layouts.custom')

@section('content')
    <h1>Create Todo</h1>
    <form method="POST" action="{{action('TodoController@store')}}">
        @csrf
        <div class="form-group">
            <label for="text" style="font-size: 20px;">Text</label>
            <input type="text" class="form-control" id="text" name="text" required>
        </div>
        <div class="form-group">
            <label for="body" style="font-size: 20px;">Body</label>
            <textarea class="form-control" id="body" name="body" required></textarea>
        </div>
        <div class="form-group">
            <label for="due" style="font-size: 20px;">Due</label>
            <input type="text" class="form-control" id="due" name="due" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
