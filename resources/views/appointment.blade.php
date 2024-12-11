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


<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Appointment</h1>
            <a href="" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">Appointment</a>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Appointment Start -->
<div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 90px;">
<div class="container">
    @if(Session::has('success'))
        <h4 class="text-center text-success">{{ Session::get('success') }}</h4>
    @endif
</div>
         
    <div class="container">
        <div class="row gx-5">
     
           <div class="col-lg-12">
                <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
       
                    <h1 class="text-white mb-4">Request for Hospital</h1>
                    <form method="post" action="InsertAppForm">
                    @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" style="height: 55px;" name="vaccine" required>
                                    <option selected>Select A Vaccine</option>
                                 @foreach($Vaccination as $item)
<option value="{{$item->id}}">{{$item->Vaccine_Name}}</option>
                                 @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-light border-0" placeholder="Parent Name" style="height: 55px;" name="parent" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-light border-0" placeholder="Child Name" style="height: 55px;" name="child" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="number" class="form-control bg-light border-0" placeholder="Your Phone number" style="height: 55px;" name="contact" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="number" class="form-control bg-light border-0" placeholder="Child Age" style="height: 55px;" name="age" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" style="height: 55px;" name="doctor" required>
                                    <option selected>Select Doctor</option>
                                    @foreach($doctors as $item)
                                    <option value="{{$item->id}}">{{$item->Name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" style="height: 55px;" name="hospital" required>
                                    <option selected>Select Hospital</option>
                                    @foreach($hospital as $item)
                                    <option value="{{$item->id}}">{{$item->Hospital_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                           
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="date" class="form-control bg-light border-0 datetimepicker-input" placeholder="Appointment Date"  style="height: 55px;" name="app_date" required>
                                </div>
                            </div>

                            <!--For username/userid-->
                            <div class="col-12 col-sm-6">
                                <input type="hidden" class="form-control bg-light border-0" value="{{Session::get('UserID')}}"  style="height: 55px;" name="userId">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="hidden" class="form-control bg-light border-0" value="{{Session::get('Username')}}"  style="height: 55px;" name="userName">
                            </div>
                            
                            <!--For username/userid-->



                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Make Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->


<!-- Newsletter Start -->
<div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
    <div class="container">
        <div class="bg-primary p-5">
            <form class="mx-auto" style="max-width: 600px;">
                <div class="input-group">
                    <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                    <button class="btn btn-dark px-4">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Newsletter End -->


@endsection