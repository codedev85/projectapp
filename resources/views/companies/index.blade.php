
@extends('layouts.app')


@section('content')

<div class="card card-primary">
<div class="card card-header" id="bg-company-index"><h3 class="company-header">Companies <a href="/companies/create" class="btn btn-primary  offset-7" role="button">Create Company</a></h3></div>
<div class="card-body">

@if(count($companies) > 0)
    <ul class="list-group">
        @foreach($companies as $company)
    <li class="list-group-item"><a href="/companies/{{$company->id}}">{{$company->name}}</a></li>
        @endforeach
    </ul>
@else
    <h5>No Company Listed </h5>
@endif 
</div>
</div>

@endsection()