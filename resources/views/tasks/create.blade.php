
@extends('layouts.app')

@section('content')


<br>

@include('inc.navbarcreate')
<br><br>

<div class="container">
    <div class="row" id="project-lists">
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      <h1>Create Task</h1>
      <form method="post" action="{{route('tasks.store')}}">
        @CSRF
    
     <div class="form-group">
        <label for="task-name">Name of Task<span class="required">*</span></label>
      <br>
        <input 
              type="text" 
              placeholder="Enter task's name"
              name="name" 
              class="form-control"
              spell-check="false"
              id="task-name"
              required
              >

     </div>
      <br>
       <div class="form-group">
        <label for="task-name">Number of days<span class="required">*</span></label>
      <br>
        <input 
              type="number" 
              placeholder="Enter number of days "
              name="days" 
              class="form-control"
              spell-check="false"
              id="task-name"
              required
              >

     </div>
     <br>
       <div class="form-group">
        <label for="task-name">Hours<span class="required">*</span></label>
      <br>
        <input 
              type="number" 
              placeholder="Duration in Hours "
              name="hours" 
              class="form-control"
              spell-check="false"
              id="task-name"
              required
              >

     </div>
     <br>
      @if($companies != null)
      <div class="form-group">
        <label for="task-name">Name of company<span class="required">*</span></label>
      <br>
      <select class="form-control" name="company_id">
        @foreach($companies as $company)
          <option value="{{$company->id}}">{{$company->name}}</option>
        @endforeach
      </select>
              
     </div>
     @else
      <input 
              type="hidden" 
              name="company_id" 
              value="{{$company_id}}"
           
              >
    @endif


    {{-- @if($companies != null)
    <div class="form-group">
      <label for="task-name">Name of project<span class="required">*</span></label>
    <br>
    <select class="form-control" name="project_id">
      @foreach($projects as $project)
        <option value="{{$project->id}}">{{$project->name}}</option>
      @endforeach
    </select>
            
   </div>
   @else
    <input 
            type="hidden" 
            name="project_id" 
            value="{{$project_id}}"
         
            >
  @endif --}}
     
{{--   
  <div class="form-group">
      <label for="project-content">Description</label>
            <br>
             <textarea 
                     placeholder="Enter description"
                     name="description"  
                     class="form-control"
                     id="project-content"
                     spellcheck="false"
                     rows=10>
                     
            </textarea>
            <br> --}}
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