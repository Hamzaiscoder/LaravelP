<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Doctors</title>
</head>
<body>
    
<div class="container">
    <div class="d-grid gap-2">
        <a href="adminIndex"><button class="btn btn-primary" type="button">Back To DashBord</button></a>
    </div>
</div>
<div class="container">
    <h2 class="text-center mt-5">Add Doctor Details</h2>
</div>
<div class="container">
    @if(Session::has('success'))
        <p class="text-center text-success">{{ Session::get('success') }}</p>
    @endif
</div>
<div class="container">
<form enctype="multipart/form-data" method="POST" action="InsertDoctor">
@csrf 
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="dname">Doctor Name</label>
                <input type="text" class="form-control" id="dname" name="dname" placeholder="Enter name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="dcnic">CNIC</label>
                <input type="number" class="form-control" id="dcnic" name="dcnic" placeholder="Enter CNIC number">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="dphone">Phone Number</label>
                <input type="number" class="form-control" id="dphone" name="dphone" placeholder="Enter phone number">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="dadress">Address</label>
                <input type="text" class="form-control" id="dadress" name="dadress" placeholder="Enter address">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="demail">Email Address</label>
                <input type="email" class="form-control" id="demail" name="demail" placeholder="Enter email address">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="dpass">Password</label>
                <input type="password" class="form-control" id="dpass" name="dpass" placeholder="Enter password">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="dfile">Profile Picture</label>
                <input type="file" class="form-control" id="dfile" name="dfile">
            </div>
        </div>
        <div class="col-md-6">
            <label for="dspec" class="form-label">Specialization</label>
            <select name="dspec" id="dspec" class="form-control">
                <option value="">Select a Specialization</option>
                @foreach($specialization as $spec)
                    <option value="{{ $spec->id }}">{{ $spec->Spe_Name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
