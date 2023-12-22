@extends("layouts.layout")
@section("content")


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
             
              <a href="/" type="button" class="btn btn-danger btn-block btn-sm">Logout</a>
          </div>
  
        
         </div>
        </div>
      </div>
    </div>
    <div class="col-md-9 mb-4">
      <div class="card mb-4 bg-light" style="width: 900px;">
        <div class="card-header bg-light py-3">
          <h3 class="mb-0 text-center text-warning">List Of Payment Status</h3>
        </div>
      
       <table class="table table-striped">
    <thead>
      <tr>
    
        <th scope="col">Id</th>
        <th scope="col">Amount</th>
        <th scope="col">Status</th>  
        <th scope="col">Email</th>
        <th scope="col">Reference Number</th>
      </tr>

      @if($trans->count())
      @foreach ($trans as $user)
      <tr> 
        
             
        <td> {{ $user->id }}</td>
        <td> {{ $user->amount }}</td>
        <td scope="col"> {{ $user->status }}</td>  
        <td scope="col"> {{ $user->email }}</td> 
        <td scope="col"> {{ $user->reference_number }}</td> 
       

      </tr>
      @endforeach
      
      @endif
      
    </thead> 
  </table>
  
        </div>
      </div>
    </div>
  
   
  </div>
  </div>
  </section>

















@endsection