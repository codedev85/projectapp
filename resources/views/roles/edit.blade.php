


@extends('layouts.app')

@section('content')


<br>
{{-- 
@include('inc.navbaredit') --}}
<br><br>

<div class="container">
    <div class="row" id="project-lists">
      <h1>Edit Role</h1>
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      
      <form method="post" action="{{route('roles.update', [$role->id])}}">
        @CSRF
        @METHOD('PUT')
    
     <div class="form-group">
        <label for="role-name">Name<span class="required">*</span></label>
      <br>
        <input 
              type="text" 
              value="{{$role->name}}" 
              name="name" 
              class="form-control"
              spell-check="false"
              id="role-name"
              required
              >
     </div>
      <br>
      

      <div class="form-group">
     
            <br>
            <input 
                   type="submit" 
                   value="submit" 
                   class="btn btn-success">
        </div>
      </form>
    </div>
</div>
</div>
@endsection