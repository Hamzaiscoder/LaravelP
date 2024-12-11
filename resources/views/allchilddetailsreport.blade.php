@extends('adminLayout')
@section('adminContent')

<div class="main-panel">
    <div class="content-wrapper">
        <h2 class="text-center pl-3">All Child Details</h2>
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
                            <th>Guardian Name</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>Picture</th>
                            <th>Vaccination History</th>
                            <th>Diseases</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($chilDetailsform as $item)
                        <tr>
                            <td> {{$item->id}}</td>
                            <td> {{$item->Name}}</td>
                            <td> {{$item->guardian_name}}</td>
                            <td> {{$item->gender}}</td>
                            <td> {{$item->dob}}</td>
                            <td> {{$item->address}}</td>
                            <td> {{$item->contact_number}}</td>
                            <td><img src="images/{{$item->Picture}}" alt="" width="50px" height="50px" style="border-radius:50px;"></td>
                            <td> {{$item->vaccination_history}}</td> <!-- Dynamic data -->
                            <td> {{$item->diseses}}</td> <!-- Dynamic data -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
