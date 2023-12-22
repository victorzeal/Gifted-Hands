@extends("layouts.layout")
@section("content")

<!-- Registration Form -->
<!-- Donate Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-inline-block rounded-pill bg-secondary text-light py-1 px-3 mb-3">Register Here</div>
                <h1 class="display-6 mb-5">Changing The Lives Of The Orphan Child One Penny At a Time.</h1>
                <p class="mb-0">A place aimed at helping hundreds
                  and thousands of orphans in need accross
                  the country, thereby ensuring quality of life
                  for the average orphan child</p>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="h-100 bg-secondary p-2 py-3 my-5 px-3" >
                <h1 class="text-center text-white">Sign Up</h1>
<form action="/reg" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-light border-0" name="fullname" id="name" placeholder="User fullname">
                <label for="name">User fullname</label>
            </div>
        </div>
        <div class="col-12">
          <div class="form-floating">
              <input type="text" class="form-control bg-light border-0" name="location" id="address" placeholder="Location">
              <label for="name">Location</label>
          </div>
      </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="email" class="form-control bg-light border-0" name="email" id="email" placeholder="Your Email">
                <label for="email">Your Email</label>
            </div>
        </div>
        <div class="col-12">
          <div class="form-floating">
              <input type="text" class="form-control bg-light border-0" name="phone" id="phone" placeholder="Phone">
              <label for="phone">Phone</label>
          </div>
          </div>

          <div class="col-12">
            <div class="form-floating">
              <input type="date" class="form-control bg-light border-0" name="date" id="date" placeholder="Date Registered">
              <label for="date">Date Registered</label>   
            </div>
           </div>

      <div class="col-12">
        <div class="form-floating">
            <input type="password" class="form-control bg-light border-0" name="password" id="password" placeholder="Password">
            <label for="password">Password</label>
        </div>
    </div>
    <div class="col-12">
        <div class="form-floating">
            <input type="password" class="form-control bg-light border-0" name="password" id="confirmpassword" placeholder="Confirm Password">
            <label for="password">Confirm Password</label>
        </div>
    </div>
    <div class="col-12">
        <div class="form-floating">
            <select class="form-control" id="user_id" name="type" placeholder = "User Type">
                <option value="Donor">Donor</option>
                <option value="Orphanage">Orphanage</option>
            </select>         
        </div>
    </div>
        
        <div class="col-12">
            <button type="submit" name="regbtn" class="btn-donate px-5" style="height: 50px;">
                REGISTER
                <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                    <i class="fa fa-arrow-right"></i>
                </div>
            </button>
            <p class="mt-3 text-light">Already have an account? <a href="/log" class="btn btn-default"> Login Here</a></p>
        </div>
    </div>
</form>
</div>  
    </div>
            </div>
                    </div>
                            </div>
@endsection