@extends('headerfooter')
@section('maincontent')
    <div class="conatiner">
        <h2 class="text-center mt-3">Registration Form For child</h2>
    </div>
    <div class="container">
    @if(Session::has('success'))
        <p class="text-center text-success">{{ Session::get('success') }}</p>
    @endif
</div>


    <div class="container mt-3" style="margin-bottom:150px;">
    <form method="POST" action="child_detail" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
   
    <input type="hidden" class="form-control" id="UsreID" name="UsreID"  value="{{Session::get('UserID')}}" readonly>
  </div>
  
 
    <div class="form-group mb-3">
    <label for="txtname">Child Name</label>
    <input type="text" class="form-control" id="txtname" name="txtname"   >
  </div>
  <div class="form-group mb-3">
    <label for="gdname">Guardian Name</label>
    <input type="text" class="form-control" id="gdname" name="gdname"   >
  </div>

  <div class="form-group mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" id="gender" class="form-control">
                <option value="">Select Gender</option>
                <option value="Girl">Girl</option>
                <option value="Boy">Boy</option>
              </select>
        </div>

  <div class="form-group mb-3">
    <label for="dob">Date Of Birth</label>
    <input type="date" class="form-control" name="dob"  id="dob" >  
  </div>
  <div class="form-group mb-3">
    <label for="address">Home Address</label>
    <input type="text" class="form-control" id="address" name="address"   >
  </div>
  <div class="form-group mb-3">
    <label for="contact">Contact Number</label>
    <input type="text" class="form-control" id="contact" name="contact"   >
  </div>


  <div class="form-group mb-3">
    <label for="txtfile">Profile</label>
    <input type="file" class="form-control" name="txtfile"  id="txtfile" >  
  </div>
 
  <div class="form-group mb-3">
    <label for="vacc_history">Vaccination History</label>
    <input type="text" class="form-control" id="vacc_history" name="vacc_history"   placeholder="Previous vaccinations">
  </div>
   
  <div class="form-group mb-3">
    <label for="diseases">Diseases</label>
    <textarea class="form-control" id="diseases" name="diseases" placeholder="Can you please share the medical condition of your child and their current health status?" rows="4"></textarea>
</div>

  <button type="submit" class="btn btn-primary mt-3">Submit</button>

</form>
<a href="/"><button class="btn btn-danger mt-3">Cancel</button></a>

    </div>
@endsection