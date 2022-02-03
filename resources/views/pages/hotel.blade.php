@extends('welcome')
@section('body')
<div class="container">
    <br>
    <div class="row">
        <div class="col-4">
            <div class=" text-dark  ">

              <div class="">
                <h6>Hotel details</h6>
                <hr>
                <h5 class="card-title mb-0 " style="font-weight: 600;">{{$hotel->name}}</h5>
                <small class="">{{$hotel->city}}</small><br>
                <p class="mt-2" style="font-weight: 600;">Price details</p>
                <small class="">Simple rooms price: <span class="h6 text-danger" style="font-weight: 600;">{{$hotel->lprice}}</span></small>
                <br><small class="">Standard rooms price: <span class="h6 text-danger" style="font-weight: 600;">{{$hotel->sprice}}</span></small>
                <br><small class="">Best rooms price: <span class="h6 text-danger" style="font-weight: 600;">{{$hotel->hprice}}</span></small>
               <br> <p class="mt-2" style="font-weight: 600;">Extra services</p>
               @if ($hotel->wifi != null)
               <span class="badge rounded-pill bg-primary px-3 py-1">Wifi</span>
               @elseif ($hotel->television != null)
               <span class="badge rounded-pill bg-primary px-3 py-1">Television</span>
               @elseif ($hotel->breakfast != null)
               <span class="badge rounded-pill bg-primary px-3 py-1">Breakfast</span>

               @else

               @endif
              </div>
              <br>
              <div class="row">

                  <div class="col-12 text-start">
               <a name="" id="" class="btn btn-danger  my-2" style="border-radius:20px;transform: translateX(-5px)"  href="#" role="button">Order room</a>

                  </div>
              </div>
            </div>


        </div>
        <div class="col">
              <div class="">

                <div class="">

                  <div id="carouselId" class="carousel slide" style="width: 100%;" data-bs-ride="carousel">

                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="hotels/{{$images[0]}}" class="w-100 "  alt="First slide">
                        </div>
                        @foreach ($images as $image)
                        <div class="carousel-item active">
                            <img src="hotels/{{$image}}" class="w-100 "  alt="First slide">
                        </div>
                        @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                </div>
                </div>
              </div>
        </div>
    </div>
</div>
<br>
@endsection
