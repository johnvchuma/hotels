<div class="py-2 ">
    <div class="container">
        <small class="text-muted">Do you need a place to sleep ?</small><br>
        <small>Find a hotel and book now</small>
    </div>
</div>
<hr>
<div class="py-0 ">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <a href="/"  style="font-weight:600;font-size: 23px;" class="text-danger h4 text-decoration-none">Tz Hotels</a>
                <br><small>Quick and fine service</small>
            </div>
            <div class="col-4 d-flex flex-row justify-content-end">
                 <div>
                     @if (Auth::check())
                     @if (Auth::user()->role == 'admin')
                     <a href="admin" class="text-decoration-none text-dark me-3 text-uppercase " >GO TO ADMIN PANEL</a>

                     @else
                     <a href="hlogin" class="text-decoration-none text-dark me-3 text-uppercase " >{{Auth::user()->firstname}} {{Auth::user()->surname}}</a>

                     @endif


                     @else
                     <a href="hlogin" class="text-decoration-none text-dark me-3">Login</a>
                     <a href="hregister" class="text-decoration-none text-dark">Register</a>

                     @endif

                 </div>
            </div>
        </div>

    </div>
</div>
