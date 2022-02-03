@extends('welcome')
@section('top')
<div style="height: 61vh;background-image: url('images/bg2.jpg');background-size: cover;" >
    <div class="container">
<div class="card" style="transform: translateY(10px);">
    <div class="card-body">
   <form action="create" method="post" enctype="multipart/form-data">
     @csrf
     @if ($errors->any())
     @foreach ($errors->all() as $error)
     <small class="text-danger">{{$error}} </small>
     @endforeach
     @endif
     <p class="text-dark" style="font-weight: 600;">Add new hotel</p>
     <div class="row">
         <div class="col">

             <label class="custom-file">
                 <small class="text-danger ms-1">Main image</small>
                <input type="file" name="main"  class="form-control" >
              </label>

         </div>
         <div class="col">
                <div class="mb-3">
                  <label class="custom-file ">
                 <small class="text-danger ms-1">Other images</small>

                    <input type="file" multiple name="others[]"  class="form-control" >
                  </label>

                </div>
         </div>
         <div class="col">
           <div class="mb-3">
             <label class="custom-file ">
            <small class="text-danger ms-1"></small>

            <input type="tel" class="form-control"  name="phone" placeholder="Phone number">
             </label>

           </div>


         </div>
     </div>
     <div class="row mt-2">
         <div class="col">
             <input type="Text" class="form-control" name="name" placeholder="Hotel's name">
         </div>
         <div class="col">
             <input type="Number" class="form-control" name="rooms" placeholder="Number of rooms">
         </div>
         <div class="col">
              <select class="form-control" name="city">
                <option>Choose city</option>
                <option>Dar es slaam</option>
                <option>Arusha</option>
                <option>Dodoma</option>
                <option>Iringa</option>
                <option>Songea</option>
              </select>
         </div>
     </div>
     <div class="row mt-2">
         <div class="col">
             <input type="Number" name="lprice" class="form-control" placeholder="Low room price @night">
         </div>
         <div class="col">
             <input type="Number" name="sprice" class="form-control" placeholder="Standard room price @night">
         </div>
         <div class="col">
             <input type="Number" name="hprice" class="form-control" placeholder="High room price @night">
         </div>
     </div>
     <hr>
     <p>Additional servicies</p>
     <div class="row mt-2">
         <div class="col">
             <div class="form-check">
               <input type="checkbox" name="wifi"  class="form-check-input" value="Wifi" >
               <label class="form-check-label" for="">
                 Wifi
               </label>
             </div>
         </div>
         <div class="col">
             <div class="form-check">
               <input type="checkbox" name="television" class="form-check-input" value="Television" >
               <label class="form-check-label" for="">
                 Television
               </label>
             </div>
         </div>
         <div class="col">
             <div class="form-check">
               <input type="checkbox" name="breakfast" class="form-check-input" value="Breakfast" >
               <label class="form-check-label" for="">
                 Breakfast
               </label>
             </div>
         </div>
     </div>
     <br>
     <button type="submit" class="btn btn-danger">Add Hotel</button>
   </form>
    </div>
  </div>
    </div></div>
@endsection
