@extends("layouts.layout")
@section("content")



@php

    if(isset($_GET['id'])){
             $id= $_GET['id'];

            echo '<script>';
            echo 'var phpId = ' . json_encode($id) . ';';
            echo '</script>';
    }
  
@endphp

<!-- Profile Start -->
<section id="profile"  class="overlay-bg">
    <div class="container text-light">
{{-- <form action="{{ route('pay') }}" method="POST" id="paymentForm"> --}}
    <form  method="POST" id="paymentForm"> 
    @csrf
    <div class="col-12">
<div class="form-group">
     <label for="email">Email Address</label>
    <input type="email" class="form-control bg-light border-0" id="email-address" name ="email" value = "{{ $user->email }}" required />
</div>
</div>

<div class="col-12">
<div class="form-group">
    <label for="amount">Amount</label>
    <input type="tel" class="form-control bg-light border-0" id="amount" name ="amount"  required />
</div>
</div>

<div class="col-12">
<div class="form-group">
    <label for="first-name">Fullname</label>
    <input type="text" class="form-control bg-light border-0" id="first-name" name="fullname"  value = "{{ $user->fullname }}" required />
</div>
</div>



<div class="col-12">
<div class="form-submit">
    <button type="submit"  class="btn-donation px-5 " style="height: 50px; width: 300px; " onclick="payWithPaystack()"> Pay </button>
</div>
</div>
</form>
</div>
</section>
<!-- Profile End -->
  
    @endsection