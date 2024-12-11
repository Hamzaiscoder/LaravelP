@extends('headerfooter')
@section('maincontent')

<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->




<div class="container mt-3">
    <h1 class="text-center">Login</h1>
</div>

<div class="container">
    @if(Session::has('success'))
    <p class="text-center text-success">{{ Session::get('success') }}</p>
    @endif

    @if(Session::has('error'))
    <p class="text-center text-danger">{{ Session::get('error') }}</p>
    @endif
</div>
<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">



            <div class="col-xl-12 col-lg-12 wow slideInUp" data-wow-delay="0.3s">
                <form method="post" action="login_verify">
                    @csrf
                    <div class="row g-3" style="display:flex;justify-content:center;align-items:center;flex-direction:column;">

                        <div class="col-6">
                            <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;" name="txtemail">
                        </div><br>
                        <div class="col-6">
                            <input type="password" class="form-control border-0 bg-light px-4" placeholder="Your Password" style="height: 55px;" name="txtpassword">
                        </div>

                        <div class="col-3">
                            <button class="btn btn-primary w-100 py-3 mb-5" type="submit">Log In</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->



@endsection