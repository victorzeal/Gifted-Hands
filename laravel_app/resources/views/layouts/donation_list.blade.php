@extends("layouts.layout")
@section("content")
 <!-- Profile Start -->
 <section id="profile" class="overlay-bg">
    <div class="container" >
      
      <div class="row">
           <div class="col-md-3 mb-4">
           <div class="card cardprofile bg-light mb-4" style="width: 300px; height: 530px;">
        <div class="card-header bg-light py-3">
          <h3 class="mb-0 text-center text-warning">Profile</h3>
        </div>
        <div class="card-body">
         <div class="row">
          <div class="col-12">
              <div class="text-center mb-3">
              <img src="assets/img/hand.jpeg" class="img-fluid rounded-circle">
              </div>
               <div class="col-12 text-center">
               <hr>
  
            <a href="profile.php" class="btn btn-warning">Back to profile</a>
         </div>
              <hr>
              <div>
              
      
             
          </div>
          </div>
  
        
         </div>
        </div>
      </div>
    </div>
    <div class="col-md-9 mb-4">
      <div class="card mb-4 bg-light" style="width: 900px;">
        <div class="card-header bg-light py-3">
          <h3 class="mb-0 text-center text-warning">Donations Received</h3>
        </div>
        <div class="card-body bg-light" style="min-height:200px">
        
      <table class="table table-striped">
    <thead>
      <tr>
        
        <th scope="col">Donor Name</th>
        <th scope="col">Donor Email</th> 
        <th scope="col">Amount</th>
      </tr>

    
      @foreach ($donor_list as $user)
      <tr> 
        
             
       
        <td> {{ $user->fullname }}</td>
        <td scope="col"> {{ $user->email }}</td>  
       
        <td scope="col"> {{ $user->amount}}</td> 
       

      </tr>
      @endforeach
      
 
    </thead>
    <tbody>
     <tr> 
          <td colspan="5" class="text-center">Total</td>
      </tr>
    </tbody>
  
  </table>
  
        </div>
      </div>
    </div>
  
   
  </div>
  </div>
  </section>
  <!-- Profile End -->
  
  




