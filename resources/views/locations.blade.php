<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <title>Spiti24 | Locations</title>

  </head>
  <body>
    
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark">
<div class="container">
  <a class="navbar-brand" href="/home"><img src="images/logo.png" alt="spiti24" height="35"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="nav-link" href="/home">Admin panel</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/locations">Locations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/types">Types</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/availabilities">Availabilities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/appartments">Appartments</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="btn btn-danger btn-md btn-navbar" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
      </li>
    </ul>
  </div>
</div>
</nav>
<!--End of navbar-->

<!--Notifications-->
 @if (session('status'))
<div class="notifications">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('status')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
</div>
</div>
</div>
@endif
<!--End of notifications-->

<!--Start locations metric & add-->
<div class="metric-add">
<div class="container">
<div class="row">

<div class="col-md-6">
<h5 class="float-left">You have {{$count_locations}} locations</h5>
</div>

<div class="col-md-6">
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#new-location">
  New location
</button>
</div>

</div>
</div>
</div>
<!--End of locations metric $ add-->


<!--Start locations table-->
<div class="locations-table">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Location</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($locations as $location)
    <tr>
      <td>{{$location->location}}</td>
       <td><a class="btn btn-sm btn-info" href="#">Update</a></td> 
       <td><a class="btn btn-sm btn-danger" href="/delete-location/{{$location->id}}">Delete</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

</div>
</div>
</div>
</div>
</div>
<!--End of locations table-->






<!--Modal-->
<div class="modal fade" id="new-location" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new location</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="new-location" method="POST">
        {{csrf_field()}}

        <div class="form-group">
          <label for="location">Location name</label>
          <input type="text" class="form-control" name="location" id="location">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--End of modal -->







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
