@extends('welcome')
@section('top')
<div style="height: 50vh;background-image: url('images/bg2.jpg');background-size: cover;" >
    <div class="container">
        <div class="card  text-white " style="transform: translateY(10px);">

            <div class="card-body ">
               <p class="text-dark" style="font-weight: 600;">Search and sort hotels</p>
             <form class="d-flex flex-row justify-content-around">
                   <input type="search" class="form-control  px-2" style="margin-right:20px ;" name="search" placeholder="Search place">
                   <div class=""  style="margin-right:20px ;">

                   <select class="form-control " name="type">
                       <option>Luxury</option>
                       <option>Affordable</option>
                       <option>Near me</option>
                   </select>
                   </div>
                   <input type="submit" class="btn btn-danger" value="Search">
               </form>
            </div>
        </div>
    </div>
    </div>

@endsection
@section('body')

<div class="container">
    <br>
   <h6 style="font-weight:600">Pupular hotels</h6>
   <div class="row text-dark">
    @foreach ($hotels as $hotel)
    <div class="col-3">
        <div class="card text-white">
          <img class="card-img-top" src="/hotels/{{$hotel->main}}" alt="">
          <div class="card-body text-dark">
            <h6 class="card-title" style="font-weight: 600;">{{$hotel->name}}</h6>
            <small><a href="hotel{{$hotel->id}}}" class="text-decoration-none text-dark stretched-link">{{$hotel->city}}</a> </small>

          </div>
        </div>
      </div>
    @endforeach


</div>
<br>

<br>

</div>
@endsection
