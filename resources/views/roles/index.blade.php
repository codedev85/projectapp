
@extends('layouts.app')


@section('content')

<div class="card card-primary">
<div class="card card-header bg-default"  id="bg-company-index"><h1 style="color:#fff;">Roles<a href="/roles/create" class="btn btn-primary  offset-7" role="button">Create Roles</a></h1></div>
<div class="card-body">

@if(count($roles) > 0)
    <ul class="list-group">
        @foreach($roles as $role)
    <li class="list-group-item"><a href="/roles/{{$role->id}}">{{$role->name}}</a></li>
        @endforeach
    </ul>
@else
    <h5>No Roles Listed </h5>
@endif 
</div>
</div>

@endsection()