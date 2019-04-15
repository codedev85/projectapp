
@extends('layouts.app')


@section('content')

<div class="card card-deafult">
<div class="card card-header bg-default"><h1>Tasks<a href="/tasks/create" class="btn btn-primary pull-right" role="button">Create Task</a></h1></div>
<div class="card-body">

@if(count($tasks) > 0)
    <ul class="list-group">
        @foreach($tasks as $task)
    <li class="list-group-item"><a href="/tasks/{{$task->id}}">{{$task->name}}</a></li>
        @endforeach
    </ul>
@else
    <h5>No Task Listed </h5>
@endif 
</div>
</div>

@endsection()