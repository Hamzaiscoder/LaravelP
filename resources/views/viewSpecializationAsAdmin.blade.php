@extends('adminLayout')
@section('adminContent')
<style>

</style>
<div class="main-panel">
  <div class="content-wrapper">

<h2 class="text-center pl-3">Specialization Details</h2>
    <div class="container d-flex">
    
   <a href="specialization">
     <button  class="add btn btn-primary" >Add Specialization</button></a>

    </div>

<div class="container mt-3">
    
    <table class="table table-striped table-dark">
    <tr>
    <th>Id</th>
    <th>Specialization</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>
    @foreach($specialization as $item)
    <tr>
    <td> {{$item->id}}</td>
    <td> {{$item->Spe_Name}}</td>
    <td><button class="btn btn-success">Edit</button></td>   
  <td><button class="btn btn-danger">Delete</button></td>
   

    </tr>
    @endforeach
    </table>
</div>
    
</div>    
  </div>
@endsection