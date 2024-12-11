@extends('adminLayout')
@section('adminContent')

<div class="main-panel">
    <div class="content-wrapper">
        <h2 class="text-center">Appointment Details</h2>

        <!-- Table starts here -->
        <div class="container mt-3">
            <div style="overflow-x: auto;">
                <table class="table table-bordered table-hover table-sm" style="width: 100%; text-align: center;">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>User ID</th>
                            <th>User Name</th>
                            <th>Vaccine</th>
                            <th>Parent Name</th>
                            <th>Child Name</th>
                            <th>Contact</th>
                            <th>Age</th>
                            <th>Doctor</th>
                            <th>Hospital</th>
                            <th>App Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Appointment as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->userid}}</td>
                            <td>{{$item->userName}}</td>
                            <td>{{$item->Vaccine_Name}}</td>
                            <td>{{$item->parent}}</td>
                            <td>{{$item->child}}</td>
                            <td>{{$item->contact}}</td>
                            <td>{{$item->age}}</td>
                            <td>{{$item->Doctor_Name}}</td>
                            <td>{{$item->Hospital_name}}</td>
                            <td>{{$item->app_date}}</td>
                            <td>{{ $item->Status ?? 'No Status' }}</td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm">Approve</a>
                                <a href="#" class="btn btn-danger btn-sm">Reject</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
