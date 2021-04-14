<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>All students</title>
  </head>
  <body>
    <div class = "container">

    @if(Session::has('m'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Congratulations!</strong> {{Session::get('m')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    @endif


    <br><br>

    <a href="{{route('addStd')}}"class="btn btn-warning">Add New Student</a>
    <a href="{{route('home_page')}}"class="btn btn-success">Go To Home Page</a>
    <br> <br>
    <table class="table table-dark table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">Id </th>
              <th scope="col">Roll Number</th>
              <th scope="col">Name</th>
              <th scope="col">Section</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>

            @foreach($allStudent as $s)


            <tr>
              <th scope="row">{{$s->id}}</th>
              <td>{{$s->roll}}</td>
              <td>{{$s->name}}</td>
              <td>{{$s->sec}}</td>


                <td>
                    <a href="/editStudent/{{$s->id}} " class="btn btn-primary">Edit</a>
                    <a href="/dltStudent/{{$s->id}}"class="btn btn-danger">Delete</a>
                    <a href="/singleStudent/{{$s->id}}"class="btn btn-success">Details</a>
                
                </td>

            </tr>
            

            @endforeach
          </tbody>
        </table>

        

















    
    
    
    
    
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>