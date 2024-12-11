@extends('adminLayout')
@section('adminContent')

<div class="main-panel">
    <div class="content-wrapper">
        <h2 class="text-center pl-3">Contact Page Messages</h2>
        <div class="container d-flex">
        </div>

        <!-- Table start here -->
        <div class="container mt-3">
            <div style="overflow-x:auto;">  <!-- Add this div to enable scrolling -->
                <table class="table table-striped table-dark" style="width: 100%;
   table-layout: auto;"
>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>

                            
                         
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Contact as $item)
                        <tr>
                            <td> {{$item->id}}</td>
                            <td> {{$item->Name}}</td>
                            <td> {{$item->Email}}</td>
                            <td> {{$item->Subject}}</td>
                            <td> {{$item->Message}}</td>
                            <td><a href=""><button class="btn btn-primary">Status</button></a></td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
