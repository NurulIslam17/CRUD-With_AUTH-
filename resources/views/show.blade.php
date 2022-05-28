<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Show Data</title>
  </head>

  <body>

    <div class="container bg-secondary p-2">
      <h2 class="text-center text-light p-2">All the Information</h2>
      <a href="{{url('/form')}}" class="btn btn-primary bg-success m-1"> Add Data</a>
      @if(Session::has('msg'))
      <p class="alert alert-success">{{Session::get('msg')}}</p>
      @endif
      <table class="table table-striped bg-light table-bordered ">
        <thead>
          <tr>
            <th scope="col">Serial</th>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">City</th>
            <th scope="col">Country</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>
          @foreach($showData as $key=>$data)
          <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->city}}</td>
            <td>{{$data->country}}</td>
            <td>
              <a href="{{url('/edit/'.$data->id)}}" class="btn btn-success">Edit</a>
              <a href="{{url('/delete/'.$data->id)}}" onclick="return confirm('Think again ...!!')" class="btn btn-danger">Delete</a>
            </td> 
          </tr>
          @endforeach
        </tbody>
      </table>
      {{$showData->links()}}
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>

  </html>