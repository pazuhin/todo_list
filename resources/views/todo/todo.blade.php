@extends('layouts.custom')

@section('content')
@include('inc.massages')
<h2>Todos</h2>
@if(count($todos) > 0)
    @foreach($todos as $todo)
        <div class="card card-body bg-light m-1">
            <h3><a href="/todo/{{$todo->id}}"class="pr-5 text-secondary">{{$todo->text}}</a><span class="badge-danger">{{$todo->due}}</span></h3>
        </div>
    @endforeach
@endif
{{ $todos->links('paginate') }}
<?php //echo $todos->appends(['sort' => 'created_at'])->render(); ?>
@endsection