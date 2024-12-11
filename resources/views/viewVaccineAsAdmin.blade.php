@extends('adminLayout')
@section('adminContent')
<style>

</style>
<div class="main-panel">
<div class="content-wrapper">
<h2 class="text-center pl-3">Vaccine Details</h2>
    <div class="container d-flex">
    
   <a href="vaacinationform">
     <button  class="add btn btn-primary" >Add Vaccine</button></a>

    </div>

<div class="container mt-3">
    
    <table class="table table-striped table-dark">
    <tr>
    <th>Id</th>
    <th>Vaccine Name</th>
    <th>Status</th>
    <th>Edit Status</th>
    <th>Delete</th>
    </tr>
    @foreach($Vaccination as $item)
    <tr>
    <td> {{$item->id}}</td>
    <td> {{$item->Vaccine_Name}}</td>
    <td>
    @if($item->Status == "Available")
        <button class="btn btn-warning">{{ $item->Status }}</button>
    @elseif($item->Status == "Not Available")
        <button class="btn btn-secondary">{{ $item->Status }}</button>
    @else
        <button>{{ $item->Status }}</button> <!-- Default button for other statuses -->
    @endif
</td>

    <td><a href="EditData/{{$item->id}}"><button class="btn btn-success">Edit</button></a></td>   
  <td><a href="DeleteData/{{$item->id}}"><button class="btn btn-danger">Delete</button></a></td>


    </tr>
    @endforeach
    </table>
</div>
</div>
</div>
@endsection