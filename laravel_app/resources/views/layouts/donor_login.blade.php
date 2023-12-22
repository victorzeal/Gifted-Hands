@extends("layouts.layout")
@section("content")

<!-- Donate Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-inline-block rounded-pill bg-secondary text-light py-1 px-3 mb-3">Login Here</div>
                <h1 class="display-6 mb-5">Changing The Lives Of The Orphan Child One Penny At a Time.</h1>
                <p class="mb-0">and thousands of orphans in need accross
                  the country, thereby ensuring quality of life
                  for the average orphan child.</p>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="h-100 bg-secondary p-2 py-3 my-5 px-3" >
                <h1 class="text-center text-white">Login</h1>
                <form action="/login" method="POST">
                    @csrf
                        <div class="row g-3">
                            <div class="col-12">

                                <div class="form-floating">
                                    <input type="email" class="form-control bg-light border-0" name="email" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                           
                          <div class="col-12">
                            <div class="form-floating">
                                <input type="password" class="form-control bg-light border-0" name="password" id="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                        </div>
                            
                            <div class="col-12">
                                <button type="submit" name="login_btn" class="btn-donate px-5" style="height: 50px;">
                                    Login
                                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </button>
                                <p class="mt-3 text-light">Dont have an account? <a href="/register" class="btn btn-default"> Register Here</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Donate End -->
@endsection
