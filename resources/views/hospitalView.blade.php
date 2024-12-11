@extends('adminLayout')
@section('adminContent')

<div class="main-panel">

<div class="content-wrapper">

<h2 class="text-center pl-3">Hospital Details</h2>
    <div class="container">
   <a href="HospitalForm">
     <button  class="add btn btn-primary" >Add Hospital</button></a>
    </div>
<div class="container mt-3">
    
    <table class="table table-striped table-dark">
    <tr>
    <th>Id</th>
    <th>Hospital Name</th>
    <th>Edit</th>
    <th>Delete</th>
    
    </tr>
    @foreach($hospital as $item)
    <tr>
    <td> {{$item->id}}</td>
    <td> {{$item->Hospital_name}}</td>
    <td><button class="btn btn-success">Edit</button></td>   
  <td><button class="btn btn-danger">Delete</button></td>

    </tr>
    @endforeach
    </table>
</div>
</div>
</div>

@endsection