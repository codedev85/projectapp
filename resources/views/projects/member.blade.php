
@extends('layouts.app')

@section('content')


<br>

{{-- @include('inc.navbar') --}}

<div class="container">
        <div class="jumbotron">
                <h1 class="project-heading-color">Members</h1>
            </div>
            
            <div class="row" >
                    <div id="add-members">
                            <div class=" col-md-8 col-lg-8  input-group mb-3 ">
                       
                                    <input type="email" class="form-control" placeholder="Add User" aria-label="Add User" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                      <button class="btn btn-outline-primary" type="button" id="button-addon2">Add </button>
                                    </div>
                            </div>
                    </div> 
            </div>
            <br><br>
            
            <table class="table table-bordered table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
            

</div>
@endsection
