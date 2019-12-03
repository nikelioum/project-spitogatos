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

    <title>Spiti24 | Admin panel</title>

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
      <li class="nav-item active">
        <a class="nav-link" href="/home">Admin panel</a>
      </li>
      <li class="nav-item">
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




<!--Start metric statistics-->
<div class="metric-statistics">
<div class="container">
<div class="row">

<div class="col-md-3">
<div class="card shadow-sm text-center card-metric">
  <div class="card-body">
    <h4 class="card-title">Locations</h4>
    <h5 class="card-subtitle mb-2 metric-number">{{$count_locations}}</h5>
    <a href="/locations" class="card-link seeall">See all</a>
  </div>
</div>
</div>

<div class="col-md-3">
<div class="card shadow-sm text-center card-metric">
  <div class="card-body">
    <h4 class="card-title">Types</h4>
    <h5 class="card-subtitle mb-2 metric-number">{{$count_types}}</h5>
    <a href="/types" class="card-link seeall">See all</a>
  </div>
</div>
</div>

<div class="col-md-3">
<div class="card shadow-sm text-center card-metric">
  <div class="card-body">
    <h4 class="card-title">Availabilities</h4>
    <h5 class="card-subtitle mb-2 metric-number">{{$count_availabilities}}</h5>
    <a href="/availabilities" class="card-link seeall">See all</a>
  </div>
</div>
</div>

<div class="col-md-3">
<div class="card shadow-sm text-center card-metric">
  <div class="card-body">
    <h4 class="card-title">Appartments</h4>
    <h5 class="card-subtitle mb-2 metric-number">{{$count_appartments}}</h5>
    <a href="/appartments" class="card-link seeall">See all</a>
  </div>
</div>
</div>

</div>
</div>
</div>
<!--End of metric statistics-->














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
