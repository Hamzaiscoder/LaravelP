<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Specialization</title>
</head>
<body>
<div class="container">
    <div class="d-grid gap-2">
        <a href="adminIndex"><button class="btn btn-primary" type="button">Back To DashBord</button></a>
    </div>
</div>
<div class="container">
    @if(Session::has('success'))
        <p class="text-center text-success">{{ Session::get('success') }}</p>
    @endif
</div>
    <div class="container">
    <h2 class="text-center">Add Specialization</h2>
    </div>

    <div class="container">
    <form method="POST" action="InsertSpecialization" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
    <label for="txtname">Specialization Name</label>
    <input type="text" class="form-control" id="txtname" name="txtname"  id="txtname" placeholder="Enter Specialization Name">
  </div>


  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
    
    
    
    
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>