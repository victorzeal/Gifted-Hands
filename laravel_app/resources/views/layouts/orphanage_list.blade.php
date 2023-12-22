@extends("layouts.layout")
@section("content")


<!-- Profile Start -->
<section id="profile"  class="overlay-bg">
    <div class="container">
      
      <div class="row">
           <div class="col-md-3 mb-4">
           <div class="card cardprofile bg-light mb-4" style="width: 300px; height: 530px;">
        <div class="card-header bg-light py-3">
          <h3 class="mb-0 text-center text-warning">Welcome</h3>
        </div>
        <div class="card-body">
         <div class="row">
          <div class="col-12">
              <div class="text-center mb-3">
                  <img src="css/img/hand.jpeg" class="img-fluid rounded-circle">
              </div>
             
              <a href="" type="button" class="btn btn-danger btn-block btn-sm">Logout</a>
          </div>
  
        
         </div>
        </div>
      </div>
    </div>
    <div class="col-md-9 mb-4">
      <div class="card mb-4 bg-light" style="width: 900px;">
        <div class="card-header bg-light py-3">
          <h3 class="mb-0 text-center text-warning">List Of Orphanages</h3>
        </div>
      
       <table class="table table-striped">
    <thead>
      <tr>
    
        <th scope="col">Orphanage Name</th>
        <th scope="col">Orphanage Address</th>
        <th scope="col">Orphanage Email</th>  
        <th scope="col">Action</th>
      </tr>

      @if($users->count())
      @foreach ($users as $user)
      <tr> 
        
             
        <td> {{ $user->fullname }}</td>
        <td> {{ $user->location }}</td>
        <td scope="col"> {{ $user->email }}</td>  
        <td scope="col"><a href="/payee?id={{$user->id }}"> Click Me</a></td>

      </tr>
      @endforeach
      @else 
      <tr>
        <td colspan="4"> No data available </td>

    </tr>
      @endif
    </thead> 
  </table>
  
        </div>
      </div>
    </div>
  
   
  </div>
  </div>
  </section>
  <!-- Profile End -->
  @endsection


