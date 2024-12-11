<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
    <div class="conatiner">
        <h2 class="text-center mt-3">Registration Form For child</h2>
    </div>
    <div class="container mt-3">
    <form method="POST" action="InsertStudent" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
    <label for="txtname">Name</label>
    <input type="text" class="form-control" id="txtname" name="txtname"  id="txtname" >
  </div>

  <div class="form-group mb-3">
    <label for="txtemail">Email address</label>
    <input type="email" class="form-control" name="txtemail"  id="txtemail" >  
  </div>
  
  <div class="form-group mb-3">
    <label for="txtage">Age</label>
    <input type="number" class="form-control" name="txtage"  id="txtage" >  
  </div>

  <div class="form-group mb-3">
    <label for="txtfile">Image</label>
    <input type="file" class="form-control" name="txtfile"  id="txtfile" >  
  </div>
 
  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>