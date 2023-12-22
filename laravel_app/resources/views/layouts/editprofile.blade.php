@extends("layouts.layout")
@section("content")
<section id="editprofile" class="overlay-bg">
    <div class="container">
        
        <div class="row">
             <div class="col-md-3 mb-4">
        <div class="card mb-4">
          <div class="card-header bg-light text-warning py-3">
            <p class="mb-0 text-center">Profile</p>
          </div>
          <div class="card-body bg-light text-light">
           <div class="row">
            <div class="col-12">
                <div class="text-center mb-3">
                <img src="assets/img/hand.jpeg" class="img-fluid rounded-circle">
                </div>
                 <div class="col-12 text-center"><br>
                 <a href="profile.php" class="btn btn-warning text-light">Back to profile</a>
           </div>
                <hr>
             
            </div>
    
        </div>
    </div>
    </div>
    </div>
    <div class="col-md-9 mb-4">
    <div class="card mb-4">
   
    <div class="card-body bg-light text-warning" style="min-height:200px">
     <h2 class="text-center h-100 bg-warning text-light p-5" id="editprofile">Edit Profile</h2>
     <form action="process/editprofile_process.php" method="post">
      
          <div class="col-12 mb-3">
              <label for="fullname" class="form-label">Fullname</label>
              <input type="text" class="form-control" id="orphanagename" aria-describedby="emailHelp" value="" name="orphanage_name"/>
          </div>
    
          <div class="col-12 mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="" name="orphanage_email"/>
        </div>
        <div class="col-12 mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" value="" name="orphanage_phone"/>
        </div>
        <div class="col-12 mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" aria-describedby="emailHelp" value="" name="orphanage_address"/>
        </div>  
        <input type="hidden" name="orphanage_id" value="">
        <div class="form-outline mb-4">
          <button type="submit" name="edit_profile" class="btn btn-warning text-light">Update Profile</button>
       </div>
     </form>
     
    </div>
    </div>
    </div>
    
    
    </div>
    </div>
    </section>










@endsection