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


    

    <div class="container">
    @if(Session::has('success'))
        <h4 class="text-center text-success">{{ Session::get('success') }}</h4>
    @endif
</div>
       <div class="container mt-3">
        <h1 class="text-center">Create An Account</h1>
       </div>
    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                


              <div class="col-xl-12 col-lg-12 wow slideInUp" data-wow-delay="0.3s">
                    <form method="post" action="register_Page" enctype="multipart/form-data">
                    @csrf 
                        <div class="row g-3">
                            <div class="col-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Full Name" style="height: 55px;" name="txtname">
                            </div>
                            <div class="col-6">
                                <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;" name="txtemail">
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control border-0 bg-light px-4" placeholder=" Password must be strong" style="height: 55px;" name="txtpassword">
                            </div>
                            <div class="col-12">
                                <input type="file" class="form-control border-0 bg-light px-4"  style="height: 55px;" name="txtfile">
                            </div>
                        
                           
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 mb-5" type="submit">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
             
            </div>
        </div>
    </div>
    <!-- Contact End -->


    
    @endsection