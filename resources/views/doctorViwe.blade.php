@extends('adminLayout')
@section('adminContent')
<style>

</style>
<div class="main-panel">
    <div class="content-wrapper">

    
<h2 class="text-center pl-3">Doctor Details</h2>
    <div class="container d-flex">
    
   <a href="doctorform">
     <button  class="add btn btn-primary" >Add Doctor</button></a>

    </div>

<div class="container mt-3">
<div style="overflow-x:auto;"> 
    <table class="table table-striped table-dark">
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Cnic</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Email</th>
    <th>Specialization</th>
    <th>Picture</th>
    <th>Delete</th>
    </tr>
    @foreach($doctors as $item)
    <tr>
    <td> {{$item->id}}</td>
    <td> {{$item->Name}}</td>
    <td> {{$item->Cnic}}</td>
    <td> {{$item->Phone}}</td>
    <td> {{$item->Address}}</td>
    <td> {{$item->Email}}</td>
    <td> {{$item->Spe_Name}}</td>
    <td><img src="images/{{$item->Picture}}" alt="" width="50px" height="50px" style="border-radius:50px;"></td>
    <td><a href="DeleteDoctor/{{$item->id}}"><button class="btn btn-danger">Delete</button></a></td>

    </tr>
    @endforeach
    </table>
</div>
</div>
<div class="container">
<a href="generate_pfd"><button class="btn btn-danger">Download Pdf</button></a>
</div>
</div></div>
@endsection