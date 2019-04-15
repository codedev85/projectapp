{{-- 
@extends('layouts.app')

@section('content')

@include('inc.navbarrole')
<br>




<div class="jumbotron">
     <h1 class="project-heading-color">{{$role->name}}</h1>
     <p> {{$role->created_at}}</p>
</div>
@endsection --}}



@extends('layouts.app')

@section('content')


<br>

{{-- @include('inc.navbarrole') --}}

<div>
    <h1>Role ID : <small>#{{$role->id}} </small></h1>
    
</div>
@include('inc.navbarrole');
<div class="jumbotron">
    <h1 class="project-heading-color">{{$role->name}}</h1>
</div>
@endsection

