@extends('welcome')
@section('top')
<div style="height: 50vh;background-image: url('images/bg2.jpg');background-size: cover;" >
    <div class="container">
<div class="card" style="transform: translateY(10px);">
    <div class="card-body">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <small class="text-danger">{{$error}} </small>
        @endforeach
        @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
     <p class="text-dark" style="font-weight: 600;">Fill the form below</p>
     <div class="row">
         <div class="col">
             <input type="text" name="firstname" class="form-control" placeholder="Firstname">

         </div>
         <div class="col">
             <input type="text" name="surname" class="form-control" placeholder="Surname">

         </div>
         <div class="col d-flex flex-row justify-content-start ">
             <div class="form-check">
                 <label class="form-check-label">
                 <input type="radio" class="form-check-input" name="gender"  value="checkedValue">
                 Male
               </label>
             </div>
             <div class="form-check ms-2">
                 <label class="form-check-label">
                 <input type="radio"  class="form-check-input" name="gender"  value="checkedValue">
                 Female
               </label>
             </div>
         </div>
     </div>
     <div class="row mt-2">
         <div class="col">
             <select class="form-control" name="nationality">
                 <option>Nationality</option>
                 <option>Tanzanian</option>
                 <option>Outsider</option>
               </select>
         </div>
         <div class="col">
             <input type="text" name="card" class="form-control" placeholder="Visa card number">

         </div>
         <div class="col">
            <input type="tel" name="phone" class="form-control" placeholder="Phone number">

         </div>
     </div>
     <div class="row mt-2">
         <div class="col">
             <input type="email" name="email" class="form-control" placeholder="Enter your email address">


         </div>
         <div class="col">
             <input type="password" name="password" class="form-control" placeholder="Password">
         </div>
         <div class="col">
             <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat Password">
         </div>
     </div>


     <br>
     <button type="submit" class="btn btn-danger">Register</button>
    </form>
    </div>
  </div>
    </div></div>
@endsection
