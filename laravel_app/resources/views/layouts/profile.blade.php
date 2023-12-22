@extends("layouts.layout")
@section("content")




  <!-- Profile Start -->
  <section id="profile"  class="overlay-bg">
    <div class="container">
    
     <div class="row">
      <div class="col-md-3 mb-4">
      <div class="card cardprofile bg-light mb-4" style="width: 300px; height: 600px;">
          <div class="card-header bg-light py-3">
              <h3 class="mb-0 text-center text-warning">Profile</h3>
          </div>
          
          <div class="card-body">
              <div class="row">
                  <div class="col-12">
                      <div class="text-center mb-3">
                          <img src="assets/img/hand.jpeg" class="img-fluid rounded-circle">
                      </div>
         
                      <br>
                      <div>
                    <p><a href="/editprofile" class="custom-link">Edit My Profile</a></p>
                    <!-- <p><a href="changepassword.php" class="custom-link">Change Password</a></p> -->
                    <p><a href="/donate" class="custom-link">View Donations</a></p>
                    <a href="logout.php" type="button" class="btn btn-danger btn-block btn-sm">Logout</a>
                </div>
  
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  <div class="col-md-9 mb-4">
    <div class="card bg-light mb-4">
      <div class="card-header bg-light py-3">
      </div>
      <div class="card-body bg-light text-warning" style="min-height:200px">
        
      </div>
    </div>
  </div>
  
  
   
  </div>
     
  
  </div>
  </section>
  <!-- Profile End -->








@endsection