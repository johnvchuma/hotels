@extends('welcome')
@section('top')
<div style="height: 50vh;background-image: url('images/bg2.jpg');background-size: cover;" >
    <div class="container">
<div class="card" style="transform: translateY(10px);">
    <div class="card-body">
        <form action="/login" method="POST">
            @csrf
         <p class="text-dark" style="font-weight: 600;">Enter credentials below</p>
         <div class="row">
             <div class="col">
                 <input type="email" name="email" class="form-control" placeholder="Enter your email address">

             </div>
             <div class="col">

             </div>
             <div class="col">

             </div>
         </div>
         <div class="row mt-2">
             <div class="col">
                 <input type="password" name="password" class="form-control" placeholder="Password">

             </div>
             <div class="col">

             </div>
             <div class="col">

             </div>
         </div>
         <div class="row mt-2">
             <div class="col">
                 <div class="form-check">
                     <input type="checkbox" class="form-check-input" value="remember" >
                     <label class="form-check-label" for="">
                       Remember me
                     </label>
                   </div>
             </div>
             <div class="col">

             </div>
             <div class="col">

             </div>
         </div>

         <br>
         <button type="submit" class="btn btn-danger">Login</button>
     </form>

    </div>
  </div>
    </div></div>
@endsection
