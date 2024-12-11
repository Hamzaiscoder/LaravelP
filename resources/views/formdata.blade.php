<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Form Data</title>
</head>
<body>
    
<div class="container">
    <h2 class="text-center">Form Data</h2>
</div>

<div class="container">
    
<table class="table table-striped table-dark">
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Age</th>
<th>Picture</th>

</tr>
@foreach($student as $item)
<tr>
<td> {{$item->id}}</td>
<td> {{$item->Name}}</td>
<td> {{$item->Email}}</td>
<td> {{$item->Age}}</td>
<td><img src="images/{{$item->picture}}" width="50px" height="50px" style="border-radius: 50px;"></td>
</tr>
@endforeach
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>